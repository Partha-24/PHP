<?php

session_start();
if(!isset($_SESSION['userName'])){
    header('Location: login.php');
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normal User Page</title>
    <link rel="stylesheet" href="normalUserPage.css">
</head>
<body>
    <div class="card">
        <div class="banner">
            <svg viewBox="0 0 100 100">
                <path d="m38.977 59.074c0 2.75-4.125 2.75-4.125 0s4.125-2.75 4.125 0"></path>
                <path d="m60.477 59.074c0 2.75-4.125 2.75-4.125 0s4.125-2.75 4.125 0"></path>
                <path d="m48.203 69.309c1.7344 0 3.1484-1.4141 3.1484-3.1484 0-0.27734-0.22266-0.5-0.5-0.5-0.27734 0-0.5 0.22266-0.5 0.5 0 1.1836-0.96484 2.1484-2.1484 2.1484s-2.1484-0.96484-2.1484-2.1484c0-0.27734-0.22266-0.5-0.5-0.5-0.27734 0-0.5 0.22266-0.5 0.5 0 1.7344 1.4141 3.1484 3.1484 3.1484z"></path>
                <path d="m35.492 24.371c0.42187-0.35156 0.48047-0.98438 0.125-1.4062-0.35156-0.42188-0.98438-0.48438-1.4062-0.125-5.1602 4.3047-16.422 17.078-9.5312 42.562 0.21484 0.79688 0.85547 1.4062 1.6641 1.582 0.15625 0.035156 0.31641 0.050781 0.47266 0.050781 0.62891 0 1.2344-0.27344 1.6445-0.76562 0.82812-0.98828 2.0039-1.5391 2.793-1.8203 0.56641 1.6055 1.4766 3.3594 2.9727 4.9414 2.2852 2.4219 5.4336 3.9453 9.3867 4.5547-3.6055 4.5-3.8047 10.219-3.8086 10.484-0.011719 0.55078 0.42187 1.0078 0.97656 1.0234h0.023438c0.53906 0 0.98437-0.42969 1-0.97266 0-0.054688 0.17187-4.8711 2.9805-8.7773 0.63281 1.2852 1.7266 2.5 3.4141 2.5 1.7109 0 2.7578-1.2695 3.3398-2.6172 2.8867 3.9258 3.0586 8.8359 3.0586 8.8906 0.015625 0.54297 0.46094 0.97266 1 0.97266h0.023438c0.55078-0.015625 0.98828-0.47266 0.97656-1.0234-0.007812-0.26953-0.20703-6.0938-3.9141-10.613 7.0781-1.3086 10.406-5.4219 11.969-8.9766 1.0508 0.98828 2.75 2.1992 4.793 2.1992 0.078126 0 0.15625 0 0.23828-0.003906 0.47266-0.023438 1.5781-0.074219 3.4219-4.4219 1.1172-2.6406 2.1406-6.0117 2.8711-9.4922 4.8281-22.945-4.7852-30.457-9.1445-32.621-12.316-6.1172-22.195-3.6055-28.312-0.42188-0.48828 0.25391-0.67969 0.85938-0.42578 1.3477s0.85938 0.67969 1.3477 0.42578c5.7031-2.9688 14.934-5.3047 26.5 0.4375 7.1875 3.5703 9 11.586 9.2539 17.684 0.49609 11.93-4.2617 23.91-5.7344 25.062h-0.015626c-1.832 0-3.4102-1.5742-4.0352-2.2852 0.28906-0.99609 0.44531-1.8672 0.52734-2.5117 0.62891 0.16797 1.2812 0.27344 1.9727 0.27344 0.55469 0 1-0.44922 1-1 0-0.55078-0.44531-1-1-1-7.3203 0-10.703-13.941-10.734-14.082-0.097656-0.40625-0.4375-0.71094-0.85156-0.76172-0.43359-0.050781-0.82031 0.16406-1.0117 0.53906-1.8984 3.7188-1.4297 6.7539-0.67969 8.668-6.2383-2.2852-8.9766-8.6914-9.0078-8.7617-0.17969-0.43359-0.62891-0.68359-1.1016-0.60156-0.46094 0.082032-0.80469 0.47266-0.82422 0.94141-0.14062 3.3359 0.67188 5.75 1.5 7.3164-8.3125-2.4297-10.105-11.457-10.184-11.875-0.097656-0.51562-0.57422-0.86328-1.0898-0.8125-0.51953 0.054687-0.90625 0.50391-0.89062 1.0234 0.41406 13.465-1.8516 17.766-3.2383 19.133-0.66406 0.65625-1.1992 0.67188-1.2383 0.67188-0.53906-0.050781-1.0156 0.31641-1.0938 0.85156-0.078125 0.54688 0.29688 1.0547 0.84375 1.1328 0.03125 0.003906 0.11328 0.015625 0.23828 0.015625 0.36719 0 1.1016-0.09375 1.9414-0.66406 0.050781 0.38672 0.125 0.81641 0.21875 1.2656-1.0273 0.35156-2.6211 1.0781-3.7812 2.4648-0.015625 0.019532-0.054687 0.066406-0.15625 0.046875-0.039062-0.007812-0.13281-0.039062-0.16406-0.15234-2.1875-8.1094-5.7148-28.309 8.8867-40.496zm12.711 51.828c-1.0039 0-1.5898-1.207-1.8672-2.0117 0.48047 0.023438 0.95703 0.050781 1.4531 0.050781 0.74219 0 1.4453-0.035156 2.1289-0.082031-0.24219 0.83594-0.76172 2.043-1.7148 2.043zm-13.148-30.664c1.9531 3.6211 5.6367 7.9102 12.305 8.6992 0.43359 0.046875 0.83984-0.18359 1.0234-0.57422 0.18359-0.39062 0.089844-0.85938-0.22656-1.1523-0.074219-0.070312-1.2734-1.2227-1.9688-3.6367 2 2.6094 5.3359 5.6836 10.305 6.5664 0.42187 0.070312 0.83594-0.125 1.0469-0.49219 0.21094-0.36719 0.16406-0.82812-0.11719-1.1484-0.023437-0.027344-1.9414-2.2969-1.2891-5.8906 1.2227 3.5508 3.7461 9.2227 7.8945 11.551-0.03125 0.55859-0.14844 1.668-0.55078 3.0156-0.085937 0.13672-0.125 0.28516-0.13672 0.44531-1.3008 3.8906-5.0039 9.3281-15.547 9.3281-5.375 0-9.4414-1.418-12.086-4.2109-3.5664-3.7656-3.332-8.8477-3.332-8.8984v-0.011719c1.5898-2.7227 2.5-7.3203 2.6797-13.59z"></path>
            </svg>
        </div>
        <div id="box">
            <h2 class="name" id="normalUserName"></h2>
            <div class="title" id="normalUserEmail"></div>
        </div>
            <div class="actions">
                <div class="follow-info">
                    <h2><a href="#"><span id="normalUserGender"></span><small>Gender</small></a></h2>
                <h2><a href="#"><span id="normalUserType"></span><small>User Type</small></a></h2>
            </div>
            <div id="btnDiv">
                <div>
                    <div class="follow-btn"><button id="editDetails">Edit Details</button></div>
                </div>
                <div id="btnDivv">
                    <div class="follow-btn"><button id="deleteAccount">Delete Account</button></div>
                    <div class="follow-btn"><button><a href="./logout.php">Logout</a></button></div>
                </div>
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
                    <div id="formBtnDiv"> 
                        <input type="submit" id="update-button" value="Change">
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
                    <!-- <div class="formInp">
                        <input class="inputFields" required type="text" id="usertypeE" placeholder="User Type">
                    </div> -->
                    <div>
                        <input type="radio" required name="genderE" id="genderE" value="Male">Male
                        <input type="radio" required name="genderE" id="genderE" value="Female">Female
                        <input type="radio" required name="genderE" id="genderE" value="Other">Other
                    </div>
                    <div id="editFormBtnDiv"> 
                        <div>
                            <input type="submit" class="btnn" id="btnnn" value="Update">
                        </div>
                    </div>
                </form>
                <div>
                    <button id="changePassword">Change Password</button>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

    // $(document).ready(function(){
        function updateUserDetails(firstName, lastName, email, gender, type){
            document.getElementById("normalUserName").innerHTML = firstName+' '+lastName;
            document.getElementById("normalUserEmail").innerHTML = email;
            document.getElementById("normalUserGender").innerHTML = gender;
            document.getElementById("normalUserType").innerHTML = type;
        }
        updateUserDetails("<?php echo $_SESSION['firstName']?>", "<?php echo $_SESSION['lastName']?>", "<?php echo $_SESSION['userEmail']?>", "<?php echo $_SESSION['userGender']?>", "<?php echo $_SESSION['userType']?>");
    // })

    var deleteAccountBtn = document.getElementById("deleteAccount");
    var changePasswordBtn = document.getElementById("changePassword");
    var changePasswordModal = document.getElementById("changePasswordModal");
    var changePasswordCloseSpan = document.getElementsByClassName("close")[0];
    
    var editDetailsBtn = document.getElementById("editDetails");
    var editDetailsModal = document.getElementById("editRecordModal");
    var editDetailsCloseSpan = document.getElementsByClassName("close")[1];

    changePasswordBtn.onclick = function(){
        console.log("clicked btn");
        editDetailsModal.style.display = "none";
        changePasswordModal.style.display = "block";
    }

    changePasswordCloseSpan.onclick = function() {
        changePasswordModal.style.display = "none";
        $("#changePasswordForm").trigger("reset");
        editDetailsModal.style.display = "block";
    }

    editDetailsBtn.onclick = function(){

        var preFname = "<?php echo $_SESSION['firstName']?>";
        var preLname = "<?php echo $_SESSION['lastName']?>";
        var preGender = "<?php echo $_SESSION['userGender']?>";
        var preEmail = "<?php echo $_SESSION['userEmail']?>";
        var preUserType = "<?php echo $_SESSION['userType']?>";
        $("#fnameE").val(preFname);
        $("#lnameE").val(preLname);
        $("#emailE").val(preEmail);
        // $("#usertypeE").val(preUserType);
        var $radios = $('input:radio[name=genderE]');
        $radios.filter('[value='+preGender+']').prop('checked', true);
        editDetailsModal.style.display = "block";
    }

    editDetailsCloseSpan.onclick = function() {
        editDetailsModal.style.display = "none";
        $("#editForm").trigger("reset");
    }
    
    deleteAccountBtn.onclick = function(){
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
    }

    $(document).ready(function(){
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
                            editDetailsModal.style.display = "block";
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

        $("#editForm").submit(function(e){
                e.preventDefault();

                var fname = $("#fnameE").val();
                var lname = $("#lnameE").val();
                var email = $("#emailE").val();
                var gender = $('input[name="genderE"]:checked').val();
                // var userType = $("#usertypeE").val();

                $.ajax({
                    url: "/AJAX/Practice/updateRecord.php",
                    type: "POST",
                    data: {
                        first_name: fname,
                        last_name: lname,
                        email: email,
                        gender: gender,
                        usertype: "normal"
                    },
                    success: function(data){
                        if(data == 1){
                            alert("Details Updated Successfully");
                            document.getElementById("normalUserName").innerHTML = fname+" "+lname;
                            document.getElementById("normalUserEmail").innerHTML = email;
                            document.getElementById("normalUserGender").innerHTML = gender;
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

</script>

</html>