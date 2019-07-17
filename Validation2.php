<?php 
session_start();
$user_info=array();
$error= array();
// Register Vlidation

if (isset($_POST['register_submit'])) {

  if (isset($_POST['gender'])) {

    $gender = $_POST['gender'] ;
  }
  else {
    $error[]="Please select gender.";
    $_SESSION['error'] =  "Please select gender.";
    return;
  }

  if (isset($_POST['lastname'])) {

    $lastname = $_POST['lastname'] ;
    if ( strlen($lastname)<3) {
          $error[]="Last name can't be less than 3 characters.";
          $_SESSION['error'] =  "Last name can't be less than 3 characters.";
 return;
    }
  }
  else {
    $error[]="Last name can't be empty, Please fill it.";
    $_SESSION['error'] =  "Last name can't be empty, Please fill it.";
     return;
  }

  if (isset($_POST['firstname'])) {

    $firstname = $_POST['firstname'] ;
    if ( strlen($firstname)<3) {
      $error[]="First name can't be less than 3 characters.";
          $_SESSION['error'] =  "First name can't be less than 3 characters.";
           return;

    }
  }
  else {
    $error[]="First name can't be empty, Please fill it.";
    $_SESSION['error'] =  "First name can't be empty, Please fill it.";
     return;
  }


  if (isset($_POST['age'])) {

    $age = $_POST['age'] ;
    if ( $age<18 ||  $age>150) {
      $error[]="Age can't be less than 18 years or greater than 150.";
      $_SESSION['error'] =  "Age can't be less than 18 years or greater than 150.";
       return;
    }
  }
  else {
    $error[]="Age can't be empty, Please fill it.";
    $_SESSION['error'] =  "Age can't be empty, Please fill it.";
     return;
  }

  if (isset($_POST['username'])) {

    $username = $_POST['username'] ;
    if ( strlen($username)<2) {
      $error[]="Username can't be less than 2 characters.";
      $_SESSION['error'] =  "Username can't be less than 2 characters.";
       return;

    }
  }
  else {
    $error[]="Username can't be empty, Please fill it.";
    $_SESSION['error'] =  "Username can't be empty, Please fill it.";
     return;
  }

  if (isset($_POST['password'])) {

    $password = $_POST['password'] ;
    if ( strlen($password)<6) {
      $error[]="Password can't be less than 6 characters.";
      $_SESSION['error'] =  "Password can't be less than 6 characters.";
       return;
    }
  }
  else {
    $error[]="Password can't be empty, Please fill it.";
    $_SESSION['error'] =  "Password can't be empty, Please fill it.";
     return;
  }

  if (isset($_POST['cPassword'])) {

    $cPassword = $_POST['cPassword'] ;
    if (  $cPassword != $_POST['password']) {
      $error[]="Password and confirm password doesn't match.";
      $_SESSION['error'] =  "Password and confirm password doesn't match.";
       return;
    }
  }
  else {
    $error[]="Confirm Password can't be empty.";
    $_SESSION['error'] =  "Confirm Password can't be empty.";
     return;
  }

  if(isset($_FILES['avatar'])){
    $path = "uploads/";
    $filename = $_FILES['avatar']['tmp_name'];
    $file_size = $_FILES['avatar']['size'];
    $file_type = $_FILES['avatar']['type'];
    $name = $_FILES['avatar']['name'];

    $extArray = explode(".", $name);
    $ext = $extArray[COUNT($extArray) - 1];
    $error = array();
    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];
    $ext = strtolower($ext);
    $destination = $path . $extArray[0] ."_" . time() . "." . $ext;

        //check for server error
    if($_FILES['avatar']['error'] != 0){
      $error[] = "Server Error!";
      $error[] = "Please upload your picture.";

              $_SESSION['error'] =  "Please upload your picture.";
 return;
            }

        //check for the size
            if($file_size > 10000000){  
              $error[] = "Your file is too big! ";
              $_SESSION['error'] =  "Your file is too big! ";
               return;
             }
         //check for the type
              if(!in_array($ext, $allowed_extensions)){
               $error[] = "Only image can be uploaded.";
               $_SESSION['error'] =  "Only image can be uploaded.";
                return;
             }
           }


           if (empty($error)  ){

            $moved = move_uploaded_file($filename, $destination);

            if ($moved){
              $user_info = array(
                "gender" =>$_POST['gender'],
                "first_name" =>$_POST['firstname'],
                "last_name" =>$_POST['lastname'],
                "username" =>$_POST['username'],
                "password"  => $_POST['password'],
                "age"       =>$_POST['age'],
                "avatar"       =>$destination
              );



              if(!isset($_SESSION['users'])){
                $users[$username]  =  $user_info ;
                $_SESSION['users'] =$users;
                $_SESSION['login']="You are registered.";
                header("Location: index.php");
               }else{
                $users =  $_SESSION['users'];
                if(!array_key_exists($_POST['username'], $users)){
                  $users[$username]  =  $user_info ;
                  $_SESSION['users'] =$users;
                  $_SESSION['login']="You are registered.";
                  header("Location: index.php");
                }
                else{
                  $error[] = "Username exists. Please try a new one.";
                  $_SESSION['error'] =  "Username exists. Please Choose another one.";
                  header("Location: index.php");
                }
              }
               

            }
            else{
             $error[] = "Please upload your picture.";
             $_SESSION['error'] =  "Please upload your picture.";
           }
         }

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
     }
 ?>