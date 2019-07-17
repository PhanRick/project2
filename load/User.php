<?php 
session_start();
$name="";
$lname="";
$age="";
$gender=false;
$user="";

if (isset($_SESSION['user'])) {

  $gender =$_SESSION['user']['gender'];
  $fname =$_SESSION['user']['first_name'];

  $lname =$_SESSION['user']['last_name'];
  $user =$_SESSION['user']['username'];

  $age =$_SESSION['user']['age'];
  $avatar =$_SESSION['user']['avatar'];

}
function Count2 ($userName){
  $countt=0;
  if ( isset($_COOKIE['blogs'])){
   $array_post =unserialize($_COOKIE['blogs']);

   foreach ($array_post as $key => $value) {
    if($userName==$value[0]){
     $countt++;

   }
 }
}

return  $countt;
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