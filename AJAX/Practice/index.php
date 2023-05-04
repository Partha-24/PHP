<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="txtHint"><b>Person Records</b></div>
<div id="addBtnDiv">
    <Button id="newRecord">Add New</Button>
</div>

<div id="newRecordModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="formDiv">
            <form id="addForm">
                <div class="formInp">
                    <input class="inputFields" required type="text" id="fname" placeholder="First Name">
                </div>
                <div class="formInp">
                    <input class="inputFields" required type="text" id="lname" placeholder="Last Name">
                </div>
                <div class="formInp">
                    <input class="inputFields" required type="text" id="email" placeholder="E-mail">
                </div>
                <div>
                    <input type="radio" required name="gender" id="gender" value="Male">Male
                    <input type="radio" required name="gender" id="gender" value="Female">Female
                    <input type="radio" required name="gender" id="gender" value="Other">Other
                </div>
                <div id="btnDiv"> 
                    <input type="submit" id="save-button" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<div id="editRecordModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="formDiv">
            <form id="editForm">
                <div class="formInp">
                    <input class="inputFields" required type="text" id="fnameE" placeholder="First Name">
                </div>
                <div class="formInp">
                    <input class="inputFields" required type="text" id="lnameE" placeholder="Last Name">
                </div>
                <div class="formInp">
                    <input class="inputFields" required type="text" id="emailE" placeholder="E-mail">
                </div>
                <div>
                    <input type="radio" required name="genderE" id="genderE" value="Male">Male
                    <input type="radio" required name="genderE" id="genderE" value="Female">Female
                    <input type="radio" required name="genderE" id="genderE" value="Other">Other
                </div>
                <div id="btnDiv"> 
                    <input type="submit" id="update-button" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>

<table id="main" border="0" cellspacing="0">
    <tr>
        <td id="table-data">
        </td>
    </tr>
</table>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    var modal = document.getElementById("newRecordModal");
    var btn = document.getElementById("newRecord");
    var span = document.getElementsByClassName("close")[0];
    
    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        function loadTableData(){
            $.ajax({
                url : "getRecords.php",
                type : "POST",
                success : function(data){
                    $("#table-data").html(data);
                }
            })
        }
        loadTableData();

        $("#save-button").on("click", function(e){
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var gender = $('input[name="gender"]:checked').val();

            var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            if (email.match(validRegex)) {
                $.ajax({
                    url: "addRecord.php",
                    type: "POST",
                    data: {
                        first_name: fname,
                        last_name: lname,
                        email: email,
                        gender: gender
                    },
                    success: function(){
                        if(data = 1){
                            loadTableData();
                            var modal = document.getElementById("newRecordModal");
                            modal.style.display = "none";
                            $("#addForm").trigger("reset");
                        }else{
                            alert("Error cannot add record")
                        }
                    }
                })
            }else{
                alert("Invalid email address!");
            }
        })

        $(document).on("click", ".deleteBtn", function(){
            var id = $(this).data("id");
            $.ajax({
                    url: "deleteRecord.php",
                    type: "POST",
                    data: {
                        id: id,
                    },
                    success: function(){
                        if(data = 1){
                            loadTableData();
                        }else{
                            alert("Error cannot delete record")
                        }
                    }
                })
        })

        $(document).on("click", ".editBtn", function(){
            var modal = document.getElementById("editRecordModal");
            var span = document.getElementsByClassName("close")[1];
            var updateBtn = document.getElementById("update-button");
            
            var idd = $(this).data("id");
            var preFname = $(this).data("fname");
            var preLname = $(this).data("lname");
            var preGender = $(this).data("gender");
            var preEmail = $(this).data("email");
            
            $("#fnameE").val(preFname);
            $("#lnameE").val(preLname);
            $("#emailE").val(preEmail);
            var $radios = $('input:radio[name=genderE]');
            $radios.filter('[value='+preGender+']').prop('checked', true);
            
            modal.style.display = "block";
            
            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            updateBtn.onclick = function(e){
                e.preventDefault();
                var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

                var fname = $("#fnameE").val();
                var lname = $("#lnameE").val();
                var email = $("#emailE").val();
                var gender = $('input[name="genderE"]:checked').val();

                if (email.match(validRegex)) {
                    $.ajax({
                        url: "updateRecord.php",
                        type: "POST",
                        data: {
                            id: idd,
                            first_name: fname,
                            last_name: lname,
                            email: email,
                            gender: gender
                        },
                        success: function(){
                            if(data = 1){
                                loadTableData();
                                var modal = document.getElementById("editRecordModal");
                                modal.style.display = "none";
                                $("#editForm").trigger("reset");
                            }else{
                                alert("Error cannot update record")
                            }
                        }
                    })
                }else{
                    alert("Invalid email address!");
                }
            }

        })
    })
</script>

</html>