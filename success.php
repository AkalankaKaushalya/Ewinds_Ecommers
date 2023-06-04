<?php
 include 'config.php';
//If Transaction Data is Available in the URL
if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st']) && !empty($_GET['cm'])){
    //Get Transaction Information from URL
    $item_number = $_GET['item_number'];
    $txn_id = $_GET['tx'];
    $order_id = $_GET['cm'];
    $payment_gross = $_GET['amt'];
    $currency_code = $_GET['cc'];
    $payment_status = $_GET['st'];

    //Get Product infomation from the database
    $productResult = $con->query("SELECT * FROM product WHERE id = ".$item_number);
    $productRow = $productResult->fetch_assoc();

    //Check if transaction data exists with the same TXN ID
    $prevPaymentResult = $con->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'");

    if($prevPaymentResult->num_rows > 0){
        $paymentRow = $prevPaymentResult->fetch_assoc();
        $payment_id = $paymentRow['payment_id'];
        $payment_gross = $paymentRow['payment_gross'];
        $payment_status = $paymentRow['payment_status'];
    }else{
        //Insert transaction data into the database
        $payment_insert = "INSERT INTO payments(odear_id, item_number, txn_id, payment_gross, currency_code, payment_status ) VALUES('$order_id', '$item_number', '$txn_id', '$payment_gross', '$currency_code', '$payment_status')";
        if(mysqli_query($con, $payment_insert))
        {
            if($payment_status == "Completed")
            {
                $update_odera = "UPDATE odears SET status = '1' WHERE odear_id = '$order_id'";
                if(mysqli_query($con, $update_odera))
                {
                    $get_order = "SELECT * FROM odears WHERE odear_id = '$order_id'";
                    $order_res = mysqli_query($con, $get_order);
                    $row_order = mysqli_fetch_assoc($order_res);

                    $get_payment = "SELECT * FROM payments WHERE odear_id = '$order_id'";
                    $payment_res = mysqli_query($con, $get_payment);
                    $row_payment = mysqli_fetch_assoc($payment_res);

                    $p_id = $row_payment['item_number'];
                    $get_product = "SELECT * FROM product WHERE id = '$p_id'";
                    $product_res = mysqli_query($con, $get_product);
                    $row_product = mysqli_fetch_assoc($product_res);

                    
                    //$order_id = $order_id;
                    $email = $row_order['email'];
                    $order_date = $row_order['date'];
                    $order_amount = $row_payment['payment_gross'];
                    $order_status = $row_payment['payment_status'];
                    $delevary_address = $row_order['address'];
                    $product_img = $row_product['img1'];
                    $product_name = $row_product['title'];
                    
                    $quantity = $row_order['p_quantity'];
                    $totle = $row_payment['payment_gross'];

                    require_once 'phpMailer/odear_payment_complite.php';

                    header("Location: ".$base_url."track_order.php?alert=success&alert_message= Tarck Your Order&alert_text= Done.");
                    
                }
            }
            
        }
    }  
}
?>
