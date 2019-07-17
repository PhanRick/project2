<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Password</title>
<link rel="stylesheet" href="css/formStyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
<script>
$(function(){
    $("#changePass").submit(function(e){
    var validated = true;         
    oldPassword = $("input[name='oldPassword']"),
    newPassword = $("input[name='newPassword']"),
    cPassword = $("input[name='cPassword']"),               
$(this).find(".error").remove();
if($('#oldPassword').val().length < 6){
    validated = false;
        oldPassword.css("border-color", "red");
            oldPassword.parent().append("<span class='error'>Your password cannot be less than 6 characters</span>");
    $(".error").fadeIn(500);
        }else{
                oldPassword.css("border-color", "green");
                oldPassword.parent().find(".error").remove();
}
if($('#newPassword').val().length < 6){
        validated = false;
            newPassword.css("border-color", "red");
            newPassword.parent().append("<span class='error'>Your password cannot be less than 6 characters</span>");
    $(".error").fadeIn(500);
        }else{
            newPassword.css("border-color", "green");
            newPassword.parent().find(".error").remove();
    }
if($('#cPassword').val().length < 6 || $('#cPassword').val()!= $('#newPassword').val()){
    validated = false;
$('#cPassword').css("border-color", "red");
    $('#cPassword').parent().append("<span class='error'>Password doesn't match</span>");
        $(".error").fadeIn(500);
}else{
    cPassword.css("border-color", "green");
        cPassword.parent().find(".error").remove();
}

                if(validated){
                    alert("Password Proccessing to Change!");
                    return true;
                }
                return false;
            })
        });
    </script>
</head>
<body style="background-color: lightgrey;">
	<form id="changePass" class="content" action="Validation5.php" method="POST" enctype="multipart/form-data">
        <h1 style="margin-left: 650px;">Change Password</h1>
<div>
    <label class="forAlign" style="margin-left: 600px;" for="oldPassword">Old Password:</label>
    <input type="password" id="oldPassword" name="oldPassword">
</div>
        <div>
            <label class="forAlign" style="margin-left: 600px;" for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword">
        </div>
        <div>
            <label class="forAlign" for="cPassword" style="margin-left: 600px;">Password(confirmation):</label>
            <input type="password" id="cPassword" name="cPassword">
        </div>



        <input type="submit" name="changepassword_submit" value="Submit" style="margin-left: 800px; margin-top: 25px;">
    </form>

<form action="profile.php">
    <input type="submit" value="Go back" style="margin-left: 720px; position: relative; bottom: 21px;">
</form>


</body>
</html>