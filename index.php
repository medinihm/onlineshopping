<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Home Decor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome To Home Decor</h1>
                       <p>What Makes Your House A Home</p>
                       <a href="secondpage.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
              
           </footer>
        </div>
    </body>
</html>