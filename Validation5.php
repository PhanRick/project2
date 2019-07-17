<?php 
session_start();
$user_info=array();
$error= array();
if (isset($_SESSION['user'])) {
  $user_password =$_SESSION['user']['password'];
  $user_name =$_SESSION['user']['username'];

  if (isset($_POST['changepassword_submit'])) {

    if (isset($_POST['oldPassword'])) {

      $oldPassword = $_POST['oldPassword'] ;
      if ($oldPassword!=$user_password) {
        $error[]="Password doesn't match.";
        $_SESSION['error'] =  "Password doesn't match.";
      }
    }
    else {
      $error[]="Password can't be empty.";
      $_SESSION['error'] =  "Password can't be empty.";
    }

    if (isset($_POST['newPassword'])) {

      $newPassword = $_POST['newPassword'] ;

    }
    else {
      $error[]="Password can't be empty.";
      $_SESSION['error'] =  "Password can't be empty.";
    }

    if (isset($_POST['cPassword'])) {

      $cPassword = $_POST['cPassword'] ;
      if ($cPassword!=$_POST['newPassword']) {
        $error[]="Password doesn't match.";
        $_SESSION['error'] =  "Password doesn't match.";
          
      }
    }
    else {
      $error[]="Password can't be empty.";
      $_SESSION['error'] =  "Password can't be empty.";
    }


    if (empty($error)  ){


      $user_info = array(
        "gender" =>$_SESSION['user']['gender'],
        "first_name" =>$_SESSION['user']['first_name'],
        "last_name" =>$_SESSION['user']['last_name'],
        "username" =>$_SESSION['user']['username'],
        "password"  => $newPassword,
        "age"       =>$_SESSION['user']['age'],
        "avatar"       =>$_SESSION['user']['avatar']
      );

      $users[$user_name]  =  $user_info ;
      $_SESSION['users'] =$users;
      $_SESSION['user'] =$user_info;
      $_SESSION['login']="Your password has been changed.";
      header("Location: profile.php");
    }

    else{   
      $error[]="Password doesn't match.";
      $_SESSION['error'] =  "Password doesn't match.";
      header("Location: profile.php");

    }


  }

  }else{$error[]="Password doesn't match.";
  $_SESSION['error'] =  "Password doesn't match.";

}


  $is_err=(isset( $_SESSION['error']));
      $is_login=(isset( $_SESSION['login']));
      $error_message ="" ;

      if (isset($_SESSION['error']) ) {
         $error_message=$_SESSION['error'];
     }

     $msg_login="";
     if (isset($_SESSION['login']) ) {
         $msg_login=$_SESSION['login'];
     }?>