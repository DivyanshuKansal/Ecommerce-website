<?php
require("includes/common.php");
if (isset($_SESSION['email']) && (!empty($_SESSION['email']))) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>E-STORE</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our E-Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="1.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Cannon ES</h3>
                        <p>Price:Rs.36000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                    
                </div>
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="2.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                </div>
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="3.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.50000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                </div>
                    
            </div>
            <div class="row text-center">
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="18.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price:Rs.13000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                    
                </div>
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="19.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price:Rs.3000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                </div>
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="20.jpg" alt="responsive">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs.8000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                </div>
               
                    
            </div>
            <div class="row text-center">
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="22.jpg" alt="responsive">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:Rs.800.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                    
                </div>
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="23.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs.1000.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                </div>
                <div class="col-md-4  col-sm-4">
                    <a href="#" class="thumbnail"><img src="24.jpg" alt="responsive">
                    <div class="caption">
                        <h3>Jon Zok</h3>
                        <p>Price:Rs.1500.00</p>
                    </div>
                    <button class="btn btn-primary btn-block" type="button">Order Now</button></a>
                </div>
                
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
         
    </body>
</html>
