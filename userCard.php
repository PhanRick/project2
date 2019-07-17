<?php 
session_start();
$particular_fname="";
$particular_lname="";
$particular_age="";
$particular_gender=false;
$_GET['user_Name'];
if (isset( $_SESSION['users'])) { 
   $users =  $_SESSION['users'];
if(array_key_exists($_GET['user_Name'], $users)){
    $user_info = $users[$_GET['user_Name']]  ;
 }
}
if (isset($user_info)) {
  $particular_gender = $user_info['gender'];
  $particular_fname = $user_info['first_name'];

  $particular_lname = $user_info['last_name'];
  $particular_username = $user_info['username'];

  $particular_age = $user_info['age'];
  $particular_avatar = $user_info['avatar'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Card</title>
<link rel="stylesheet" href="css/formStyle.css">
<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css"> td, th {width: 15em; border: 3px solid black; position: relative; left: 35px;} th {text-align:center;} table {border-collapse: collapse; border: 1px solid black;} </style>

</head>
<body style="background-color: lightgrey;">


<h1 style="margin-left: 720px">User Card</h1>


<table style="margin-left: 500px">
  <tr>
    <td>
<?php 
  if (isset($_SESSION['user'])) {  ?>
    <img src="<?php echo $particular_avatar ?>" class="rounded-circle" width="150" style="position: relative; left: 50px;" alt="img" >
      <?php }?>
    </td>

  <td>
    <div style="border: 3px solid black;">
    <label class="forAlign2" for="first_name">Username: </label>
    <input type="text" id="first_name" readonly="readonly" name="first_name" style="margin-left: 20px;" value="<?php echo $particular_username ?>">
    </div>
    <div  style="border: 3px solid black;">
      <label class="forAlign2" for="first_name">First Name: </label>
      <input type="text" id="first_name" readonly="readonly" name="first_name" style="margin-left: 20px;" value="<?php echo $particular_fname ?>">
    </div>
    <div  style="border: 3px solid black;">
      <label class="forAlign2" for="first_name">Last Name: </label>
      <input type="text" id="first_name" readonly="readonly" name="first_name" style="margin-left: 20px;" value="<?php echo $particular_lname ?>">
    </div>
    <div  style="border: 3px solid black;">
      <label class="forAlign2" for="first_name">Age: </label>
      <input type="text" id="first_name" readonly="readonly" name="first_name" style="margin-left: 20px;" value="<?php echo $particular_age ?>">
    </div>
    <div  style="border: 3px solid black;">
      <label class="forAlign2" for="first_name">Gender: </label>
      <input type="text" id="first_name" readonly="readonly" name="first_name" style="margin-left: 20px;" value="<?php echo $particular_gender ?>">
    </div>
  </td>
  </tr>
</table>

  <form action="users.php">
    <input type="submit" value="Go back" style="margin-left: 750px; margin-top: 20px;;">
</form>
  
  

  </body>
    </html>