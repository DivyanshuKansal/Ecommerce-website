 <?php
 if(!isset($_SESSION)) { 
    session_start(); 
} 
$con = mysqli_connect("localhost", "root", "", "ecommerce");
//error_reporting(E_ERROR | E_PARSE);
?>

