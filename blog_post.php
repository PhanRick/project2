<?php 
include 'load/User.php';
include 'load/header.php';

?>
<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Power Blog</title>
  <meta name="keywords" content="power blog" />
  <meta name="description" content="Power Blog" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/formStyle.css">
  <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <?php include 'load/postingValidation.php'; ?>
</head>
<body>

<div id="wrapper">
    <div id="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog_post.php" class="current">Post</a></li>
        <li><a href="profile.php" >Profile</a></li>
        <li><a href="users.php" >Users</a></li>
      </ul>       
    </div> 
    <!-- !!!!!!END OF MENU!!!!!! -->

    <div id="header">
      <div id="site_title">
        <a href="#" target="_blank"><span class="logo">POWER <br/> BLOG</span></a>
      </div> 
    <!-- !!!!!!END SITE TITLE!!!!!! -->

<div id="header_right">
  <h1>The BLog that gets you going</h1> 
  <p>This Blog was created by the students of Herzing in order to pratice $_SESSIONS and $_COOKIES. Have a wonderfull time browsing it. If any question feel free to leave a  shout out. <br><br>
     Herzing College 2013</p>
</div>

<div class="cleaner"></div>
</div> 
    <!-- !!!!!END OF HEADERRR!!! -->

<div id="content_wrapper_top"></div>
  <div id="content_wrapper">

<div id="sidebar">           
  <div id="login">
<?php include 'load/input2.php'; ?>
</div>
</div>
<div id="content">
 <?php if (isset($_SESSION['user'])) { ?> 
 <h2>Shout Out</h2>
 <div>
   <form id="blog_post" class="content" action="Validation3.php" method="POST" enctype="multipart/form-data">
    <div>
      <label   for="name">Title</label><br>
      <input type="text" id="title" name="title">
    </div>

    <div>
      <label   for="name">Body</label><br>
      <textarea rows="4" cols="50" name="comment"  ></textarea>
    </div>
      <br>
      <input  type="submit" name="Submit_post" class="submit_btn" value="Submit the post">
    </form>
  </div> 
  <?php } 
   else{?> 
  <h2>You have to be logged in before posting</h2>
  <img src="denied.jpg"  width="500" height="130" alt="img">
  <?php } ?>
</div>
<?php 
include 'load/footer.php';
 ?> 