<?php

session_start();
if(!isset($_SESSION['userName'])){
    header('Location: login.php');
}

?>

<html>
<head>
    <link rel="stylesheet" href="adminPage.css">
</head>
<body>
<div id="txtHint"><b>Hello <span id="userNameSpan"></span></b></div>
<div id="changePasswordDiv">
    <button id="editDetailsBtn">Edit Details</button>
    <button id="changePass">Change Password</button>
    <button id="deleteAccount">Delete Account</button>
</div>
<div id="box">
    <!-- <div id="addBtnDiv">
        <Button id="newRecord">Add New</Button>
    </div> -->
    <div id="search-bar">
        <input type="text" id="search" autocomplete="off" placeholder="Search Records">
    </div>
    <div>
        <button id="logoutBtn"><a href="./logout.php">Logout</a></button>
    </div>
    
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
                    <input class="inputFields" required type="email" id="email" placeholder="E-mail">
                </div>
                <div>
                    <input type="radio" required name="gender" id="gender" value="Male">Male
                    <input type="radio"  name="gender" id="gender" value="Female">Female
                    <input type="radio"  name="gender" id="gender" value="Other">Other
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
                    <input class="inputFields" required type="email" id="emailE" placeholder="E-mail">
                </div>
                <div class="formInp">
                    <!-- <input class="inputFields" required type="text" id="usertypeE" placeholder="User Type"> -->
                    <select name="usertype" class="inputFields" id="usertypeE">
                        <option value="admin">Admin</option>
                        <option value="normal">Normal</option>
                    </select>
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

<div id="changePasswordModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="formDiv">
            <form id="changePasswordForm">
                <div class="formInp">
                    <input class="inputFields" required type="password" id="currentPassword" placeholder="Enter Your Current Password">
                </div>
                <div class="formInp">
                    <input class="inputFields" required type="text" id="newPassword" placeholder="Enter New Password">
                </div>
                <div class="formInp">
                    <input class="inputFields" required type="text" id="newPasswordAgain" placeholder="Enter New Password Again">
                </div>
                <div id="btnDiv"> 
                    <input type="submit" id="update-button" value="Change">
                </div>
            </form>
        </div>
    </div>
</div>

<div style="margin-bottom: 10px; font-weight:bold;">List of Users</div>
<table id="main" border="0" cellspacing="0">
    <tr>
        <td id="table-data">
        </td>
    </tr>
</table>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    var newRecordModal = document.getElementById("newRecordModal");
    var newRecordBtn = document.getElementById("newRecord");
    var addModelCloseSpan = document.getElementsByClassName("close")[0];

    var changePasswordModal = document.getElementById("changePasswordModal");
    var changePasswordBtn = document.getElementById("changePass");
    var resetPasswordCloseSpan = document.getElementsByClassName("close")[2];
    
    // newRecordBtn.onclick = function() {
    //     newRecordModal.style.display = "block";
    // }

    changePasswordBtn.onclick = function(){
        changePasswordModal.style.display = "block";
    }

    // addModelCloseSpan.onclick = function() {
    //     newRecordModal.style.display = "none";
    //     $("#addForm").trigger("reset");
    // }

    resetPasswordCloseSpan.onclick = function() {
        changePasswordModal.style.display = "none";
        $("#changePasswordForm").trigger("reset");
    }

    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        function loadTableData(){
            $.ajax({
                url : "/AJAX/Practice/getRecords.php",
                type : "POST",
                success : function(data){
                    $("#table-data").html(data);
                }
            })
        }
        loadTableData();

        function setUserName(firstName, lastName){
            // document.getElementById("userNameSpan").innerHTML = fname+" "+lname;
            document.getElementById("userNameSpan").innerHTML = firstName+" "+lastName;
        }
        setUserName("<?php echo $_SESSION['firstName']?>", "<?php echo $_SESSION['lastName']?>");

        $("#addForm").submit(function(e){
            e.preventDefault();            
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var gender = $('input[name="gender"]:checked').val();

            $.ajax({
                url: "/AJAX/Practice/addRecord.php",
                type: "POST",
                data: {
                    first_name: fname,
                    last_name: lname,
                    email: email,
                    gender: gender,
                },
                success: function(data){
                    if(data == 1){
                        loadTableData();
                        var modal = document.getElementById("newRecordModal");
                        modal.style.display = "none";
                        $("#addForm").trigger("reset");
                    }else if(data == 2){
                        alert("Email Already Registred")
                    }else{
                        alert("Error cannot add record")
                    }
                }
            })
        })

        $(document).on("click", ".deleteBtn", function(){
            var id = $(this).data("id");
            if($(this).data("usertype") == "normal"){
                var answer = window.confirm("Are you sure");
                if (answer) {
                    $.ajax({
                        url: "/AJAX/Practice/deleteRecord.php",
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
                }
            }else{
                alert("Cannot Delete an Admin");
            }
        })

        $("#editDetailsBtn").click(function(){

            var userTypeComp = document.getElementById("usertypeE");
            userTypeComp.style.display = "none";

            var modal = document.getElementById("editRecordModal");
            var span = document.getElementsByClassName("close")[1];
            var updateBtn = document.getElementById("update-button");
            
            var preFname = "<?php echo $_SESSION['firstName']?>";
            var preLname = "<?php echo $_SESSION['lastName']?>";
            var preGender = "<?php echo $_SESSION['userGender']?>";
            var preEmail = "<?php echo $_SESSION['userEmail']?>";
            var preUserType = "<?php echo $_SESSION['userType']?>";
            $("#fnameE").val(preFname);
            $("#lnameE").val(preLname);
            $("#emailE").val(preEmail);
            $("#usertypeE").val(preUserType);
            var $radios = $('input:radio[name=genderE]');
            $radios.filter('[value='+preGender+']').prop('checked', true);
            
            modal.style.display = "block";
            
            span.onclick = function() {
                userTypeComp.style.display = "block";
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            $("#editForm").submit(function(e){
                e.preventDefault();
                var fname = $("#fnameE").val();
                var lname = $("#lnameE").val();
                var email = $("#emailE").val();
                var gender = $('input[name="genderE"]:checked').val();
                var userType = $("#usertypeE").val();
                $.ajax({
                    url: "/AJAX/Practice/updateRecord.php",
                    type: "POST",
                    data: {
                        first_name: fname,
                        last_name: lname,
                        email: email,
                        gender: gender,
                        usertype: userType
                    },
                    success: function(data){
                        if(data == 1){
                            alert("Details Upadated Successfully");
                            loadTableData();
                            document.getElementById("userNameSpan").innerHTML = fname+" "+lname;
                            var modal = document.getElementById("editRecordModal");
                            modal.style.display = "none";
                            $("#editForm").trigger("reset");
                        }else{
                            alert("Error cannot update record")
                        }
                    }
                })
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
            var preUserType = $(this).data("usertype");

            if(preUserType == "normal"){
                $("#fnameE").val(preFname);
                $("#lnameE").val(preLname);
                $("#emailE").val(preEmail);
                $("#usertypeE").val(preUserType);
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

                $("#editForm").submit(function(e){
                    e.preventDefault();

                    var fname = $("#fnameE").val();
                    var lname = $("#lnameE").val();
                    var email = $("#emailE").val();
                    var gender = $('input[name="genderE"]:checked').val();
                    var userType = $("#usertypeE").val();

                    $.ajax({
                        url: "/AJAX/Practice/updateRecord.php",
                        type: "POST",
                        data: {
                            id: idd,
                            first_name: fname,
                            last_name: lname,
                            email: email,
                            gender: gender,
                            usertype: userType
                        },
                        success: function(data){
                            if(data == 1){
                                loadTableData();
                                var modal = document.getElementById("editRecordModal");
                                modal.style.display = "none";
                                $("#editForm").trigger("reset");
                            }else{
                                alert("Error cannot update record")
                            }
                        }
                    })
                })
            }else{
                alert("Cannot Edit Admin");
            }
        })

        $("#search").on("keyup", function(){
            var searchVal = $(this).val();
            $.ajax({
                url: "/AJAX/Practice/liveSearch.php",
                type: "POST",
                data: {searchKey: searchVal},
                success : function(data){
                    $("#table-data").html(data);
                }
            })
        })

        $("#changePasswordForm").submit(function(e){
            e.preventDefault();

            var currentPass = $("#currentPassword").val();
            var newPass = $("#newPassword").val();
            var newPassAgain = $("#newPasswordAgain").val();
            var userEmail = "<?php echo $_SESSION['userEmail']?>";


            if(newPass !== newPassAgain){
                alert("new password didn't matched");
            }else{
                $.ajax({
                    url: "/AJAX/Practice/changePassword.php",
                    type: "POST",
                    data: {
                        email: userEmail,
                        currentpass: currentPass,
                        newpass: newPass,
                        newpassagain: newPassAgain
                    },
                    success: function(data){
                        if(data == 1){
                            alert("Password Changed Successfully");
                            var modal = document.getElementById("changePasswordModal");
                            modal.style.display = "none";
                            $("#changePasswordForm").trigger("reset");
                        }else if(data == 2){
                            alert("Wrong Password")
                        }else{
                            alert("Error cannot change password")
                        }
                    }
                })
            }
        })  

        $("#deleteAccount").click(function(){
            var answer = window.confirm("Are you sure");
            if (answer) {
                var userEmail = "<?php echo $_SESSION['userEmail']?>";
                $.ajax({
                    url: "/AJAX/Practice/deleteAccount.php",
                    type: "POST",
                    data: {
                        email: userEmail,
                    },
                    success: function(data){
                        if(data == 1){
                            alert("Account deleted Successfully");
                            location.href = 'logout.php';
                        }else{
                            alert("Error cannot delete Account");
                        }
                    }
                })
            }
        })
    })
</script>

</html>