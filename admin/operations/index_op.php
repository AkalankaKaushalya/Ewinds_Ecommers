<?php 

$all_product = "SELECT COUNT(*) FROM `product`";
$all_product_count = mysqli_query($con, $all_product);
$product_row = mysqli_fetch_array($all_product_count);
$total_product = $product_row[0];


?>