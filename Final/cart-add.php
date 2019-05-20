<?php
require("includes/common.php");
if (isset($_GET['item_id']) && is_numeric($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $user_id = $_SESSION['user_id'];
    echo $item_id."<br>";
    echo "userid: ".$user_id;
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   