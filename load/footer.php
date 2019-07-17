<div class="cleaner"></div>
</div><!-- end of content wrapper -->
<div id="content_wrapper_bottom"></div>
</div> <!-- end of wrapper -->

<div id="copyright_wrapper">
  <div id="copyright_wrapper">
    <div id="copyright">
		Copyright © 2019 Phan-Rick Ouy : Herzing  
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