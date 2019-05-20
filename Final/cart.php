<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Cart | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT `item_id` FROM `users_items`";
                                $query1 = "SELECT `name` FROM `items`";
                                $result1 = mysqli_query($con, $query1);
                                $result = mysqli_query($con, $query);
                               $abc = mysqli_query($con, "SELECT count(`item_id`) FROM `users_items`");
                                $len =  mysqli_fetch_row($abc);
                            ?>
                            <?php 
                                for($i=0; $i<$len[0]; $i++) {
                                    mysqli_data_seek($result, $i);
                                    $item = mysqli_fetch_array($result);
                                    $name = mysqli_fetch_array($result1);
                                    
                            ?>
                            <tr>
                                <td>
                                   <?php 
                                    
                                    echo $name[0]; ?>
                                </td>
                                <td>
                                    <?php
                                    
                                $query2 = "SELECT `price` FROM `items`  WHERE `item_id` = $item[0]";
                                $result2 = mysqli_query($con, $query2);
        
                                    echo mysqli_fetch_assoc($result2)['price'];
                                    $total = 0;
                                    $total += mysqli_fetch_assoc($result2)['price'];
                                    echo $total;
                                    ?>
                                </td>
                            </tr>
                            <?php
                                }
                                    ?>
                        </tbody>
                    </table>
                    <form action="success.php" method="POST">
                    <button type="submit" name="submit" class="btn btn-primary">Confirm Order</button>
                    </form>
                </div>
            </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>