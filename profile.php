<?php 
include 'load/User.php';
include 'load/header.php';
include 'load/editScript.php';
 ?>
    <div id="wrapper">
        <div id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog_post.php">Post</a></li>
                <li><a href="profile.php" class="current">Profile</a></li>
                <li><a href="users.php" >Users</a></li>
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
          </div>
          <!-- end of header -->

    <div id="content_wrapper_top"></div>
    <div id="content_wrapper">

      <div id="sidebar">           
        <div id="login">
          <?php include 'load/input2.php';  ?>
        </div>
      </div>
      <div id="content">
         <?php if (isset($_SESSION['user'])) { ?> 

        <h2>Edit Profile Information</h2>

        <div id="contact_form">

         <form id="edit_Form" class="content" action="Validation4.php" method="POST" enctype="multipart/form-data">

          <div>
            <label class="forAlign">Gender:</label>
            <label><input type="radio" name="gender" <?php  if($gender=="Male" ) {echo "checked";}?> value="Male" > Male

            </label>
            <label>             
              <input type="radio" name="gender"  <?php  if($gender=="Female" )  {echo "checked";}?> value="Female"> Female
            </label>
          </div>

          <div>
            <label  class="forAlign" for="name">Firstname:</label>
            <input type="text" id="firstname" name="firstname" value="<?= $fname?>">
          </div>

          <div>
            <label class="forAlign" for="name">Lastname:</label>
            <input type="text" id="lastname" name="lastname" value="<?= $lname?>">
          </div>
          <div>
            <label class="forAlign" for="age">Age:</label>
            <input type="number" id="age" name="age" value="<?= $age?>">
          </div>


          <div>
            <label class="forAlign" for="avatar">Avatar:</label>
            <input type="file" name="avatar" id="avatar">
          </div>


          <input  type="submit" name="update_profile" class="submit_btn" style="margin-left: 140px; margin-top: 30px;" value="Edit & Save">
          <a class='iframe  submit_btn' href="passwordChange.php" style="color: white; text-decoration: none; ">Change Password</a>
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
      Copyright © 2018 Phan-Rick Ouy.: Herzing College 
    </div>
  </div>
</div>
<script>

var error_play = "<?php echo $is_err ?>";

if(error_play){
  alert("<?php echo $error_message ?>");
}


var msg_play =  "<?php echo $is_login ?>";
if(msg_play){
 alert("<?php echo $msg_login ?>");
}


</script>

</body>
</html>
<?php unset($_SESSION['error']) ;
unset($_SESSION['login']) ;?>  