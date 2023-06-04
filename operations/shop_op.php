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

$cat_name = '';
if (isset($_GET['cid']))
{ 
 $cid = mysqli_real_escape_string($con, $_GET['cid']);
 $category = "SELECT * FROM category WHERE id = '$cid' ";
 $res_catgory = mysqli_query($con, $category);
 $category_name = mysqli_fetch_assoc($res_catgory);
 $cat_name = '<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">'.$category_name['name'].'</li>';
 $get_product2 = "SELECT * FROM product WHERE status = '1' AND c_id = '$cid' ORDER BY id DESC";
}
else
{
 $get_product2 = "SELECT * FROM product WHERE status = '1'";
}
$product2 = '';
//$get_product2 = "SELECT * FROM product WHERE status = '1' ";
$res_product2 = mysqli_query($con, $get_product2);
while ($row_product2 = mysqli_fetch_assoc($res_product2))
{
    
    $c_id = $row_product2['c_id'];
    $category = "SELECT * FROM category WHERE id = '$c_id' ";
    $res_catgory = mysqli_query($con, $category);
    $category_name = mysqli_fetch_assoc($res_catgory);

    $product2 .= '  
                    <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'" class="font-size-12 text-gray-5">'.$category_name['name'].'</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'" class="text-blue font-weight-bold">'.$row_product2['title'].'</a></h5>
                                    <div class="mb-2">
                                        <a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'" class="d-block text-center"><img class="img-fluid" src="'.$base_url.'uplodes/products/'.$row_product2['img1'].'" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">£ '.$row_product2['price'].'</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <!-- <a href="" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a> -->
                                            <a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'&qun=1"><img src="https://paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" style="margin-left: 3px;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 	</li>  
                ';

}

?>