<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Power Blog</title>
<meta name="keywords" content="power blog" />
<meta name="description" content="Power Blog" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/formStyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>          
$(document).ready(function(){
$("#login_form").submit(function(e){
    var validated = true,
    username = $("input[name='username']"),
    password = $("input[name='password']");

if($('#username').val().length < 2){
    validated = false;
    username.css("border-color", "red");
    username.parent().append("<span class='error'>Your username cannot be less than 2 characters Or The Username cannot be empty <br></span>");
    $(".error").fadeIn(500);
}else{
    username.css("border-color", "green");
    username.parent().find(".error").remove();
}
if($('#password').val().length < 6){
    validated = false;
    password.css("border-color", "red");
    password.parent().append("<span class='error'>Your password cannot be less than 6 characters Or The password cannot be empty <br></span>");
    $(".error").fadeIn(500);
}else{
    password.css("border-color", "green");
    password.parent().find(".error").remove();
}
if(validated){
    alert ("Connecting to Page");
        return true;
}  
    alert ("Missing or incomplete field(s).");
         return false;

});
});

</script>
</head>
<body>
