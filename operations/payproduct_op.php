<?php

$o_id = mysqli_real_escape_string($con,$_GET['oid']);

if(isset($_GET['oid']))
{
	$o_id = mysqli_real_escape_string($con,$_GET['oid']);

	$get_order = "SELECT *,COUNT(odear_id) AS count FROM `odears` WHERE odear_id = '$o_id'";
	$get_res = mysqli_query($con, $get_order);
	if($get_res == true)
	{
		$get_orderdata = mysqli_fetch_assoc($get_res);

		if($get_orderdata['count'] == 1)
		{
			$p_id = $get_orderdata['p_id'];
			$get_product = "SELECT * FROM `product` WHERE `id` = '$p_id' ";
    		$product_res = mysqli_query($con, $get_product);
    		$product_data = mysqli_fetch_assoc($product_res);

    		if($get_orderdata['status'] == "0")
			{
				
			}
			else
			{
				header("Location: ".$base_url."track.php?alert=error&alert_message=Track Your Order User Your Order Idalert_text=Track Your Order.");
			}	
		}
	}
}
else
{
	header("Location: ".$base_url."shop.php?alert=error&alert_message=This Product Can't Odeer alert_text=Odear Faild.");
}

?>