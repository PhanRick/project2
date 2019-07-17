<?php 
  if (isset($_SESSION['user'])) {  ?>
    <h3 class="hr_divider">Welcome back</h3>
          <form method="post" action="index.php">
<div>
  <img src="<?php echo $avatar?>" class="rounded-circle" width="150" alt="img">
             
</div>
  <label class="hr_divider"> <h4> <?php echo $fname ?></h4> </label> 
<div>
  <h4> Number of Post: <?php echo (Count2 ($user) )?> </h4></div>
<div class="cleaner_h10"></div>
    <input type="submit" name="logout" id="logout" value="Logout" class="submit_btn" />  
           
</form>
<?php }  
?>

<?php if (!isset($_SESSION['user'])) { ?> 

<h3 class="hr_divider">Member Login</h3>
  <form method="post" id ="login_form"  name ="login_form" action="Validation.php">
    <label for="username">Username:</label> 
    <input name="username" type="text" class="login_field" id="username" maxlength="30" />
      <div class="cleaner_h10"></div>
    <label for="password">Password:</label> 
    <input name="password" type="password" class="login_field" id="password" maxlength="30" />
        <div class="cleaner_h10"></div>
          <input type="submit" name="loginSubmit" id="loginSubmit" value="Login" class="submit_btn" /> 


<a class='iframe  submit_btn' href="registrationForm.php" style="color: white; text-decoration: none;margin-left: 40px;">Register</a>
</form>
<?php }?>