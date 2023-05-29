<?php session_start(); ?>
<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
    $link = "https";
}
else
{ 
	$link = "https"; 
}
    
    $link .= "://";
      
    $link .= $_SERVER['HTTP_HOST'];

if ($_SERVER['HTTP_HOST'] == "localhost") 
{
	$link .= "/Projects/My_Project/Uk_Ecommers/"; 
    $con = mysqli_connect("localhost" , "root" , "" ,"ewinds");
}
else
{
   $con = mysqli_connect("localhost" , "ewinds" , "Wh4WXRkBJEnxzzmB" ,"ewinds");
   $link .= "/hello/Uk_Ecommers/";
}

if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$base_url = $link;

// $vtype = '';
// $get_vcat = "SELECT * FROM `category` WHERE status = '1'";
// $vtype_res = mysqli_query($con, $get_vcat);
// while($vtype_row = mysqli_fetch_assoc($vtype_res))
// {
//     $vtype .='<li> <a href="'.$base_url.'vehicle_list.php?vid='.$vtype_row['id'].'">'.$vtype_row['name'].'</a> </li>';
// }


$current_file = basename($_SERVER['PHP_SELF']);


define('PAYPAL_ID','sb-lq5og26069268@business.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE OR FALSE

define('PAYPAL_RETURN_URL', $base_url.'success.php');
define('PAYPAL_CANCEL_URL', $base_url.'cancel.php');
define('PAYPAL_NOTIFY_URL', $base_url.'ipn.php');
define('PAYPAL_CURRENCY','GBP');

//Change Not Required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");
?>


