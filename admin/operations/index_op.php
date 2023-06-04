<?php 

$all_product = "SELECT COUNT(*) FROM `product`";
$all_product_count = mysqli_query($con, $all_product);
$product_row = mysqli_fetch_array($all_product_count);
$total_product = $product_row[0];

$all_new_orders = "SELECT COUNT(*) FROM `odears` WHERE status = '1'";
$all_new_orders_count = mysqli_query($con, $all_new_orders);
$new_orders_row = mysqli_fetch_array($all_new_orders_count);
$total_new_orders = $new_orders_row[0];

$all_Delivery = "SELECT COUNT(*) FROM `odears` WHERE status = '2'";
$all_Delivery_count = mysqli_query($con, $all_Delivery);
$Delivery_row = mysqli_fetch_array($all_Delivery_count);
$total_Delivery = $Delivery_row[0];



$all_category = "SELECT COUNT(*) FROM `category` ";
$all_category_count = mysqli_query($con, $all_category);
$category_row = mysqli_fetch_array($all_category_count);
$total_category = $category_row[0];




if (isset($_GET['alert'])) 
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}
?>