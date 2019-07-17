<?php 
session_start();
if (isset($_POST['logout'])) {
   unset($_SESSION['user']);
}
$array_post=array();
if (isset($_SESSION['user'])) {
    if ( isset($_COOKIE['blogs'])){
        $array_post =unserialize($_COOKIE['blogs']);
        foreach ($array_post as $key => $row){
        $array_name[$key] = $row[4];
    }
    array_multisort($array_name, SORT_DESC, $array_post);
}
}
function blogCount ($userName, $totalPost){
$countt=0;
    foreach ($totalPost as $key => $value) {
    if($userName==$value[0]){
    $countt++;

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






