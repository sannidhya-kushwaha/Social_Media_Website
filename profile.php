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
        margin-top: -200px;
        border-radius: 50%;
        border:solid 2px white; 
    }
    </style>
</head>
<body style="font-family: tahoma; background-color:#d0d8e4">
<br>
    <!-- Top bar -->
    <div id="blue_bar">
        <div style="width: 800px; margin:auto;font-size:30px">
        Mybook &nbsp; &nbsp;
    <input type="text" id="search_box" placeholder="Search for people"> 
    <img src="images/selfie.jpg" alt="" style="width: 50px;float: right;">
       
    </div>
        </div>

<!-- cover area -->
<div style="width: 800px; margin: auto;background-color: black; min-height:400px;">
<div style="background-color: white;text-align:center; color: #405d9b;">
    <img src="images/mountain.jpg" alt="" style="width: 100%;">
    <img id="profile_pic" src="images/selfie.jpg" alt="">
    
    <br>
    Timeline About Friends Photos Settings

</div>

</div>

</body>
</html>