<?php 

$p_id = mysqli_real_escape_string($con,$_GET['pid']);
$qunt = mysqli_real_escape_string($con, $_GET['qun']);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$reference = generateRandomString();

if (isset($_GET['pid']) AND isset($_GET['qun'])) 
{
    $p_id = mysqli_real_escape_string($con,$_GET['pid']);
    $qunt = mysqli_real_escape_string($con, $_GET['qun']);

    $get_product = "SELECT * FROM `product` WHERE `id` = '$p_id' ";
    $product_res = mysqli_query($con, $get_product);
    if ($product_res != false) 
    {
        $product_data = mysqli_fetch_assoc($product_res);

        if(isset($_POST['ordernow']))
        {
        	if($product_data['scount'] >= $qunt)
        	{
        		if($_POST['firstname'] != "" AND $_POST['lastname'] != "" AND $_POST['country'] != "" AND $_POST['streetaddress'] != "" AND $_POST['cityaddress'] != "" AND $_POST['postcode'] != "" AND $_POST['emailaddress'] != "" AND $_POST['phone'] != "")
        		{
					$firstname = mysqli_real_escape_string($con, $_POST['firstname']);

					$lastname = mysqli_real_escape_string($con, $_POST['lastname']);

					$country = mysqli_real_escape_string($con, $_POST['country']);

					$streetaddress = mysqli_real_escape_string($con, $_POST['streetaddress']);

					$cityaddress = mysqli_real_escape_string($con, $_POST['cityaddress']);

					$postcode = mysqli_real_escape_string($con, $_POST['postcode']);

					$emailaddress = mysqli_real_escape_string($con, $_POST['emailaddress']);

					$phone = mysqli_real_escape_string($con, $_POST['phone']);


					if (empty($_POST["emailaddress"])) 
					{
						array_push($errors,"Email is required");
					} 
					else if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) 
					{
						$_SESSION['alert'] = "error";
						$_SESSION['alert_message'] = "Invalid Email format";	
					}
					else
					{
						$oder_insert = "INSERT INTO `odears` ( `p_id`, `p_quantity`, `odear_id`, `fname`, `lname`, `country`, `address`, `city`, `zip_code`, `email`, `phone`, `status`) VALUES ('$p_id', '$qunt', '$reference', '$firstname', '$lastname', '$country', '$streetaddress', '$cityaddress', '$postcode', '$emailaddress', '$phone', '0');";
						if(mysqli_query($con, $oder_insert))
						{
							header("Location: ".$base_url."payproduct.php?oid=".$reference);
						}
						else
						{
							header("Location: ".$base_url."shop.php?alert=error&alert_message=This Product Can't Odeer alert_text=Odear Faild.");
						}
					}	
        		}
        		else
        		{
        			header("Location: ".$base_url."infomation.php?pid=".$p_id."&qun=".$qunt."&alert=error&alert_message=This Product Odear Form Not Completed alert_text=Odear Faild.");
        		}
        	}
        	else
        	{
        		header("Location: ".$base_url."single_product.php?pid=".$p_id."&alert=error&alert_message=This Product Can't Odeer alert_text=Odear Faild.");
        	}
        }
    }
    else
    {
    	header("Location: ".$base_url."shop.php?alert=error&alert_message=This Product Can't Odeer alert_text=Odear Faild.");
    }
}
else
{
	header("Location: ".$base_url."shop.php?alert=error&alert_message=This Product Can't Odeer alert_text=Odear Faild.");
}

?>