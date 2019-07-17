<?php 
session_start();
$fname="";
$lname="";
$age="";
$gender=false;
$user="";

$users=array();

if (isset($_SESSION['user'])) {

$users=$_SESSION['users'];
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

?>