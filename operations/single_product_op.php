<?php 

$product1 = '';
$get_product1 = "SELECT * FROM product WHERE status = '1' ORDER BY RAND() LIMIT 5";
$res_product1 = mysqli_query($con, $get_product1);
while ($row_product1 = mysqli_fetch_assoc($res_product1))
{
  
  $c_id = $row_product1['c_id'];
  $category = "SELECT * FROM category WHERE id = '$c_id' ";
  $res_catgory = mysqli_query($con, $category);
  $category_name = mysqli_fetch_assoc($res_catgory);

  $product1 .= '  
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-auto">
                                <a href="'.$base_url.'single_product.php?pid='.$row_product1['id'].'" class="d-block width-75">
                                    <img class="img-fluid" src="'.$base_url.'uplodes/products/'.$row_product1['img1'].'" alt="Image Description">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="'.$base_url.'single_product.php?pid='.$row_product1['id'].'">'.$row_product1['title'].'</a></h3>
                                <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="far fa-star text-muted"></small>
                                </div>
                                <div class="font-weight-bold">
                                    <ins class="font-size-15 text-red text-decoration-none d-block">£ '.$row_product1['price'].'</ins>
                                </div>
                            </div>
                        </div>
                    </li>
                ';

}



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


        $img6 = '';
        if ($product_data['img6'] != "")
        {
           $img6 = ' <div class="js-slide">
                        <img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img6'].'" alt="Image Description">
                      </div>';
        }else{ $img6 = '';}

        $img7 = '';
        if ($product_data['img7'] != "")
        {
           $img7 = ' <div class="js-slide">
                        <img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img7'].'" alt="Image Description">
                      </div>';
        }else{ $img7 = '';}

        $img8 = '';
        if ($product_data['img8'] != "")
        {
           $img8 = ' <div class="js-slide">
                        <img class="img-fluid" src="'.$base_url.'uplodes/products/'.$product_data['img8'].'" alt="Image Description">
                      </div>';
        }else{ $img8 = '';}

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