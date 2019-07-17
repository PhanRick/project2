<?php 
session_start();
$_SESSION['errorLogin'] =  "";
$user_info=array();
$error= array();
if (isset($_POST['loginSubmit'])) {
  if (isset($_POST['username'])) {
    $username = $_POST['username'] ;
    if ( strlen($username)<4) {
      $error[]="Username can't be less than 4 chars.";
      $_SESSION['error'] =  "Username can't be less than 4 chars.";
      header("Location: index.php");  
    }
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ( strlen($password)<6) {
      $error[]="Password can't be less than 6 chars.";
      $_SESSION['error'] =  "Password can't be less than 6 chars.";
      header("Location: index.php");
    }
  }
  }
  if (empty($error)  ){



    if(!isset($_SESSION['users'])){
     $_SESSION['errorLogin'] ="User doesn't exist.";

     $error[]="Username or Password is invalid.";
     $_SESSION['error'] =  "Username or Password is invalid.";
     header("Location: index.php");

   }else{
    $users =  $_SESSION['users'];
    if(array_key_exists($_POST['username'], $users)){
      if($users[$_POST['username']]['password'] == $_POST['password']){
        $_SESSION['user'] = $users[$_POST['username']];
        $_SESSION['user']['username'] = $_POST['username'];
        $_SESSION['login']= $_POST['username'] . " You are logging.";

        header("Location: index.php");

      }else{
       $_SESSION['errorLogin'] = "invalid user or password";
       $error[]="Username or Password is invalid.";
       $_SESSION['error'] =  "Username or Password is invalid.";
       header("Location: index.php");
     }
   }else{
     $_SESSION['errorLogin'] = "invalid user or password";  
     $error[]="Username or Password is invalid.";
     $_SESSION['error'] =  "Username or  Password is invalid.";
     header("Location: index.php");
   }
 }
}else{   
  $_SESSION['errorLogin'] = $error;  
  $error[]="Username or Password is invalid.";
  $_SESSION['error'] =  "Username or Password is invalid.";
  header("Location: index.php");
}
?>
