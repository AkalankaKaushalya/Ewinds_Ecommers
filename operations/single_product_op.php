<?php 

$p_id = mysqli_real_escape_string($con,$_GET['pid']);

if (isset($_GET['pid'])) 
{
    $p_id = mysqli_real_escape_string($con,$_GET['pid']);

    $get_product = "SELECT * FROM `product` WHERE `id` = '$p_id' ";
    $product_res = mysqli_query($con, $get_product);
    if ($product_res != false) 
    {
        $product_data = mysqli_fetch_assoc($product_res);

        $c_id = $product_data['c_id'];
		$category = "SELECT * FROM category WHERE id = '$c_id' ";
		$res_catgory = mysqli_query($con, $category);
		$category_name = mysqli_fetch_assoc($res_catgory);

    

     	$img1 = '';
        if ($product_data['img1'] != "")
        {
        	 $img1 = '<div class="js-slide">
                       	<img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img1'].'" alt="Image Description">
                      </div>';
        }else{ $img1 = '';}


        $img2 = '';
        if ($product_data['img2'] != "")
        {
        	 $img2 = '<div class="js-slide">
                       	<img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img2'].'" alt="Image Description">
                      </div>';
        }else{ $img2 = '';}

        $img3 = '';
        if ($product_data['img3'] != "")
        {
        	 $img3 = ' <div class="js-slide">
                       	<img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img3'].'" alt="Image Description">
                      </div>';
        }else{ $img3 = '';}


        $img4 = '';
        if ($product_data['img4'] != "")
        {
        	 $img4 = ' <div class="js-slide">
                       	<img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img4'].'" alt="Image Description">
                      </div>';
        }else{ $img4 = '';}

        $img5 = '';
        if ($product_data['img5'] != "")
        {
        	 $img5 = ' <div class="js-slide">
                       	<img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img5'].'" alt="Image Description">
                      </div>';
        }else{ $img5 = '';}

    }
    else
    {
        $product_data = array_fill(0,13,'No data Found');
    }
}



if (isset($_POST['buy']))
{
	$quantity = $_POST['quantity'];
	$product_id = $product_data['product_no'];

	if ($product_data['scount'] >= $quantity)
	{
		header("Location: ".$base_url."infomation.php?pid=".$product_data['id']."&qun=".$_POST['quantity']);
	}
	else
	{
		header("Location: ".$base_url."shop.php");
	}
}



if (isset($_GET['alert'])) 
{
	$_SESSION['alert'] = $_GET['alert'];
	$_SESSION['alert_message'] = $_GET['alert_message'];
	$_SESSION['alert_text'] = $_GET['alert_text'];
}
?>