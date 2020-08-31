<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
      
        <title>Home Decor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           
           
            </div><?php
                require 'header.php';
            ?>
             <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Home Decor </h1>
                    <p>We have the best designs to decor your home </p>
                </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="dining.php">
                                <img src="img/c1.jpeg" alt="dining table">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Dining Table</p>
                                        <p>Explore Dining Sets</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="wardrobe.php">
                               <img src="img/c2.jpeg" alt="wardrobe">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Wardrobe</p>
                                    <p>Featured Collections</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="sofa.php">
                               <img src="img/sf1.jpeg" alt="sofa">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Sofas</p>
                                   <p>Shop by styles</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
               <div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="tv.php">
                            <img src="img/t7.jpeg" alt="tv console">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">TV Consoles</p>
                                <p>Customize your designs</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="dt.php">
                            <img src="img/dt3.jpeg" alt="Dressing table">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Dressing Table</p>
                                <p>Choose yours</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="sp.php">
                            <img src="img/pj.jpeg" alt="Dressing table">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Show pieces</p>
                                <p>Great collections</p>
                            </div>
                        </center>
                    </div>
                </div>
    
    