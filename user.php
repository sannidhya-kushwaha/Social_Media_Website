<div id="friends">
<?php 
                               $image = "images/user_male.jpg";
                               if($ROW_USER['gender'] == "Female"){
                                   $image = "images/user_female.jpg";
                               }

                            ?>
                    <img id="friends_img" src="<?php echo $image ?>" alt="">
                    <br>
                    <?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name'] ?>
                </div>