<?php

session_start();

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");

   
    $login = new Login();
    $user_data = $login->check_login($_SESSION['mybook_userid']);

    // posting starts here

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        echo "</pre>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Image | Mybook</title>
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

        

            <!-- Posts area -->
        <div style="min-height: 400px;flex:2.5; padding: 20px;padding-right: 0px;">
            <div style="border:solid thin #aaa; padding: 10px; background-color: white;">

            <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
               <input id="post_button" type="submit" value="Post">
                <br>
            </div>
            </form>


         


        </div>


    </div>

</div>

</body>
</html>