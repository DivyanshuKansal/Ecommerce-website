<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Contact Us | E-STORE</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="contact.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <img src="livesupport.jpg" alt="live_support">
            <h2>TECHNICAL SUPPORT</h2><br>
            <p style="width: 45%">24 hours | 7 days a week | 365 days a year Technical Support</p><br>
            <p>We at E-Store try to provide the best services to our consumers.To enhance our services we provide 24*7 assistance to the customers for whole 365 days a year.U can contact us through our portal below or email us at <b>ekart24@gmail.com</b>.U can also contact us at our telephone number give below.Just leave a message and we will be there for u.We believe in providing the best experience to our users.Soon we will be adding some new features to the website,and if u have any ideas then also u can mail us.Feel free to review us and give suggestions to us.Ur suggestions are highly valuable to us.
            </p>
            <div class="company_info">
                <h3>Company Information</h3>
                <address>
                    E-store Pvt. Ltd.<br>
                    B-809, Unitech Business Zone,<br>
                    Nirvana Country, South City 2,<br>
                    Gurgaon, India - 122018
                </address>
            </div>
            <h3>CONTACT US</h3><br>
            <form>
                <p>Name</p>
                <textarea rows="1" cols="60"></textarea>
                <p>E-mail</p>
                <textarea rows="1" cols="60"></textarea>
                <p>Message</p>
                <textarea rows="5" cols="60"></textarea><br>
                <button class="btn btn-primary" type="button">Submit</button><br><br>
            </form>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
