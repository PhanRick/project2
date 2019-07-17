<?php 
include 'load/core2.php';
include 'load/header.php';
?>
  <div id="wrapper">
    <div id="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog_post.php">Post</a></li>
        <li><a href="profile.php" >Profile</a></li>
        <li><a href="users.php" class="current">Users</a></li>

      </ul>       
    </div> <!-- end of menu -->

    <div id="header">
      <div id="site_title">
        <a href="#" target="_blank"><span class="logo">POWER <br/> BLOG</span></a>
      </div> <!-- end of site_title -->

      <div id="header_right">
      <h1>The BLog that gets you going</h1> 
      <p>This Blog was created by the students of Herzing in order to pratice $_SESSIONS and $_COOKIES. Have a wonderfull time browsing it. If any question feel free to leave a  shout out. <br><br>
      Herzing College 2013</p>
       </div>

      <div class="cleaner"></div>
    </div> <!-- end of header -->

    <div id="content_wrapper_top"></div>
    <div id="content_wrapper">

      <div id="sidebar">           
        <div id="login">

        <?php include 'load/input2.php'; ?>
        </div>
      </div>


      <div id="content">
      <?php if (isset($_SESSION['user'])) { ?> 
        <h2>Registered Users</h2>

        <div id="Registered_users">

         <form id="edit_Form" class="content" action="Validation.php" method="POST" enctype="multipart/form-data">

         <table>

 
		 	<?php  
      foreach( $users as $key=>$value) {  ?>
			 <tr>

				 <td>
			 	<a class='iframe'  href="userCard.php?user_Name=<?php 
        echo ($users[$key]['username'])?>" style="text-decoration: none; font-weight:bold; font-size: 16px ;"><?php echo ($users[$key]['first_name'] ." ". $users[$key]['last_name']) ; }?></a> 

				 </td>
			 </tr>
		 </table>

        </form>

      </div> 
    <?php } 
      else{?> 
              <h2>You have to be logged in before posting</h2>
              <img src="denied.jpg" width="500" height="130" alt="img">
      <?php } ?>
    </div>
    <div class="cleaner"></div>
  </div><!-- end of content wrapper -->
  <div id="content_wrapper_bottom"></div>
</div> <!-- end of wrapper -->

<div id="copyright_wrapper">
<div id="copyright_wrapper">
<div id="copyright">
    Copyright © 2018 Phan-Rick Ouy: Herzing College  
 </div>
  </div>
</div>
</body>
</html>