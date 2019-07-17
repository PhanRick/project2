<?php 
include 'load/core.php';
include 'load/header.php';
 ?>
<div id="wrapper">
<div id="menu">
    <ul>
        <li><a href="index.php" class="current">Home</a></li>
        <li><a href="blog_post.php"  >Post</a></li>
        <li><a href="profile.php"  >Profile</a></li>
        <li><a href="users.php" >Users</a></li> 
    </ul>       
</div> 
<!-- end of menu -->
<div id="header">
    <div id="site_title">
        <a href="#" target="_blank"><span class="logo">POWER <br/> BLOG</span></a>
    </div> 
    <!-- end of site_title -->
    <div id="header_right">
        <h1>The BLog that gets you going</h1>
        <p>This Blog was created by the students of Herzing in order to pratice $_SESSIONS and $_COOKIES. Have a wonderfull time browsing it. If any question feel free to leave a shout out. <br><br>
        Herzing College 2013</p>
    </div>
    <div class="cleaner"></div>
</div> 
<!-- end of header -->
<div id="content_wrapper_top"></div>
<div id="content_wrapper">
    <div id="sidebar">           
        <div id="login">
            <?php include 'load/input.php'; ?>
            </div>
        </div>
        <div id="content">
            <?php include 'load/postCounter.php'; ?>      
            </div>
            <?php include 'load/footer.php' ?>