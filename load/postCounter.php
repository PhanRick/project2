  <?php 
    if (isset($_SESSION['user'])) { 
        foreach ($array_post as $key => $value) { ?>
            <div class="post_box">
                <h2>
                    <a href="blog_post.php">
                    <?php echo $value[2] ?>      
                    </a>
                </h2>
                <div class="post_meta">
                    <strong>Date:</strong><?php echo $value[4] ?> 
                    <strong>Author:</strong><?php echo $value[1] ?> 
                </div>
                <a href="#">
                    <img src="<?php echo($value[5] )?>" alt="image 2" height="150" width="150" />
                </a>
                <p><?php echo $value[3] ?></p>
                <div class="cleaner_h20"></div>
                <div class="category">
                    <a href="#" style="text-decoration: none;">
                        <?php echo (blogCount($value[0], $array_post)) ?>  comments</a>
                    </div> 
                    <div class="cleaner"></div>
        </div>
        <?php } 
    }else{ ?>
        <h2>You have to be logged in before posting </h2>
        <img src="denied.jpg " width="500" height="130" alt="img">
    <?php }
    ?>