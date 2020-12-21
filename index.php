<?php

session_start();

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");

   
    $login = new Login();
    $user_data = $login->check_login($_SESSION['mybook_userid']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Mybook</title>
    <style>

    #blue_bar{
        height: 50px;
        background-color: #405d9b;
        color: #d9dfeb;
    }
    #search_box{
        width: 400px;
        height: 20px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        font-size: 14px;
        background-image: url(images/search.png);
        background-repeat: no-repeat;
        background-position: right;
    }
    #profile_pic{
        width: 150px;
        border-radius: 50%;
        border:solid 2px white; 
    }
    
    #menu_buttons {
            width: 100px;
            display: inline-block;
            margin: 2px;
        }

        #friends_img{
            width: 75px;
            float: left;
            margin: 8px;

        }

        #friends_bar{
            min-height: 400px;
            margin-top: 20px;
            padding: 8px;
            text-align: center;
            font-size: 20px;
            color: #405d9b; 
        }
        #friends{
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
        }

        textarea{
            height: 60px;
            width: 100%;
            border: none;
            font-family: tahoma;
            font-size:14px;
        }

        #post_button{
            float: right;
            background-color: #405d9b;
            border: none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 2px;
            width: 50px;
        }

        #post_bar{
             margin-top: 20px;
             background-color: white;
             padding: 10px;

        }
        #post{
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
            
        }

    </style>
</head>
<body style="font-family: tahoma; background-color:#d0d8e4">
<br>
<?php include("header.php"); ?> 

<!-- cover area -->
<div style="width: 800px; margin: auto; min-height:400px;">
   

        <!-- Below cover area -->

    <div style="display:flex;">

            <!-- Friends area -->
        <div style="min-height:400px; flex:1;">
            <div id="friends_bar">
                
            <img id="profile_pic" src="images/sannidhya.jpg" alt="">  <br> 
               <a href="profile.php" style="text-decoration: none;">
                   <?php echo $user_data['first_name'] . "<br>" . $user_data['last_name'] ?>
               </a>           
            </div>

        </div>

            <!-- Posts area -->
        <div style="min-height: 400px;flex:2.5; padding: 20px;padding-right: 0px;">
            <div style="border:solid thin #aaa; padding: 10px; background-color: white;">
               <textarea placeholder="What's on your mind?"></textarea>
               <input id="post_button" type="submit" value="Post">
                <br>
            </div>


         <!-- Posts -->
            <div id="post_bar">

              <!-- Post 1 -->
                <div id="post">
                    <div> 
                        <img src="images/user1.jpg" alt="" style="width: 75px;margin-right: 4px;">
                    </div>
                    <div>
                        <div style="font-weight: bold; color:#405d9b;" >First Guy</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor, illo possimus ab repellendus aspernatur qui tempore atque harum obcaecati quos accusamus et dolores dolorum nesciunt ea natus cum. Blanditiis corporis dolore nulla et.
                        <br><br>
                        <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                    </div>
                </div>
              <!-- Post 2 -->
                <div id="post">
                    <div> 
                        <img src="images/user4.jpg" alt="" style="width: 75px;margin-right: 4px;">
                    </div>
                    <div>
                        <div style="font-weight: bold; color:#405d9b;" >African Guy</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor, illo possimus ab repellendus aspernatur qui tempore atque harum obcaecati quos accusamus et dolores dolorum nesciunt ea natus cum. Blanditiis corporis dolore nulla et.
                        <br><br>
                        <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                    </div>
                </div>




            </div>


        </div>


    </div>

</div>

</body>
</html>