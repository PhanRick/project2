<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/formStyle.css">
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body style="background-color: lightgrey;">
<form id="RegisterForm" class="content" action="Validation2.php" method="POST" enctype="multipart/form-data">
    
<h1 style="margin-left: 600px">Registration Form </h1>

<div>
    <label class="forAlign" style="margin-left: 485px" >Gender:</label>
    <label ><input type="radio" name="gender" value="Male" > Male</label>
    <label><input type="radio" name="gender" value="Female"> Female</label>
</div>

<div>
    <label class="forAlign" for="name" style="margin-left: 500px">Lastname:</label>
    <input type="text" id="lastname" name="lastname">
</div>

<div>
    <label  class="forAlign" for="name" style="margin-left: 500px">Firstname:</label>
    <input type="text" id="firstname" name="firstname">
</div>

<div>
    <label class="forAlign" for="age" style="margin-left: 500px">Age:</label>
    <input type="number" id="age" name="age">
</div>

<div>
    <label class="forAlign" for="username" style="margin-left: 500px">Username:</label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label class="forAlign" for="password" style="margin-left: 500px">Password:</label>
    <input type="password" id="password" name="password">
</div>

<div>
    <label class="forAlign" for="cPassword" style="margin-left: 500px">Password(confirmation):</label>
    <input type="password" id="cPassword" name="cPassword">
</div>

<div>
    <label class="forAlign" for="avatar" style="margin-left: 500px">Avatar:</label>
    <input type="file" name="avatar" id="avatar">
</div>
<input type="submit" name="register_submit" value="Subscribe" style="margin-left: 755px; margin-top: 16px">
<input type="reset" value="Reset Form">
</form>
<form action="index.php">
    <input type="submit" value="Go back" style="margin-left: 679px; position: relative; bottom: 20px;">
</form>

<script>

$(function(){
$("#RegisterForm").submit(function(e){
    var validated = true,
    gender = $("input[name='gender']");
    lastname = $("input[name='lastname']"),
    firstname = $("input[name='firstname']"),
    age = $("input[name='age']"),
    username = $("input[name='username']"),
    password = $("input[name='password']"),
    cPassword = $("input[name='cPassword']"),
    $(this).find(".error").remove();


if(!gender.is(':checked')){
    validated = false;
    gender.css("color", "red");
    gender.parent().parent().append("<span class='error'>gender is not selected</span>");
    $(".error").fadeIn(500);
}else{
    gender.parent().css("color", "black");
    gender.parent().parent().find(".error").remove();
     }
if(lastname.val().length < 2){
    validated = false;
    lastname.css("border-color", "red");
    lastname.parent().append("<span class='error'>Cannot be less than 2 characters or empty case</span>");
    $(".error").fadeIn(500);
}else{
    lastname.css("border-color", "green");
    lastname.parent().find(".error").remove();
}
if(firstname.val().length < 3){
    validated = false;
    firstname.css("border-color", "red");
    firstname.parent().append("<span class='error'>Cannot be less than 3 characters or empty case</span>");
    $(".error").fadeIn(500);
}else{
    firstname.css("border-color", "green");
    firstname.parent().find(".error").remove();
}

if(age.val() <13 || age.val() >150){
    validated = false;
    age.css("border-color", "red");
    age.parent().append("<span class='error'>Age must be between 13 and 150</span>");
    $(".error").fadeIn(500);
}else{
    age.css("border-color", "green");
    age.parent().find(".error").remove();
}

if((username).val().length < 2){
    validated = false;
    username.css("border-color", "red");
    username.parent().append("<span class='error'>Cannot be less than 2 characters or empty case</span>");
    $(".error").fadeIn(500);
}else{
    username.css("border-color", "green");
    username.parent().find(".error").remove();
}

if( password.val().length < 6){
    validated = false;
    password.css("border-color", "red");
    password.parent().append("<span class='error'>Cannot be less than 6 characters  or empty case</span>");
    $(".error").fadeIn(500);
}else{
    password.css("border-color", "green");
    password.parent().find(".error").remove();
}

if(cPassword.val().length < 6 || ( cPassword.val()!=  password.val())){
    validated = false;
    cPassword.css("border-color", "red");
    cPassword.parent().append("<span class='error'>Password doesn't match</span>");
    $(".error").fadeIn(500);
}else{
    cPassword.css("border-color", "green");
    cPassword.parent().find(".error").remove();
}

if( document.getElementById("avatar").files.length == 0 ){
    validated = false;
$('#avatar').css("border-color", "red");
    $('#avatar').parent().append("<span class='error'>File is not chosen.</span>");
        $(".error").fadeIn(500);
}else{
    $('#avatar').css("border-color", "green");
    $('#avatar').parent().find(".error").remove();
}


if(validated){
msg = "Your information:\n";
msg += "Gender: " +$("input[name='gender']:checked").val()+ "\n";
msg += "FirststName: " + firstname.val() + "\n";
msg += "LastName: " + lastname.val() + "\n";
msg += "Age: " + age.val() + "\n";
msg += "Username: " + username.val() + "\n";

var Confirmed= confirm(msg);
if (Confirmed){
    return true;
}else
return false;
}
return false;
})

$("#RegisterForm").on('reset', function(e){
    $(this).find(".error").remove();
    gender = $("input[name='gender']");
    lastname = $("input[name='lastname']"),
    firstname = $("input[name='firstname']"),
    age = $("input[name='age']"),
    username = $("input[name='username']"),
    password = $("input[name='password']"),
    cPassword = $("input[name='cPassword']"),
    gender.parent().css("color", "black");
    lastname.css("border-color", "inherit");
    firstname.css("border-color", "inherit");
    age.css("border-color", "inherit");
    username.css("border-color", "inherit");
    username.parent().find(".error").remove();
    password.css("border-color", "inherit");
    cPassword.css("border-color", "inherit");
  
});
});
</script>
</body>
</html>