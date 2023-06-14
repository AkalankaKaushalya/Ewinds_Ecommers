<?php

$product1 = '';
$get_product1 = "SELECT * FROM product WHERE status = '1' LIMIT 8";
$res_product1 = mysqli_query($con, $get_product1);
while ($row_product1 = mysqli_fetch_assoc($res_product1))
{
	
	$c_id = $row_product1['c_id'];
	$category = "SELECT * FROM category WHERE id = '$c_id' ";
	$res_catgory = mysqli_query($con, $category);
	$category_name = mysqli_fetch_assoc($res_catgory);

	$product1 .= '	
					<li class="col-6 col-wd-3 col-md-4 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="'.$base_url.'single_product.php?pid='.$row_product1['id'].'" class="font-size-12 text-gray-5">'.$category_name['name'].'</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="#" class="text-blue font-weight-bold">'.$row_product1['title'].'</a></h5>
                                    <div class="mb-2">
                                        <a href="'.$base_url.'single_product.php?pid='.$row_product1['id'].'" class="d-block text-center"><img class="img-fluid" style="width: 212px; height: 200px;" src="'.$base_url.'uplodes/products/'.$row_product1['img1'].'" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">£ '.$row_product1['price'].'</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                ';

}



$product2 = '';
$get_product2 = "SELECT * FROM product WHERE status = '1' ORDER BY RAND()";
$res_product2 = mysqli_query($con, $get_product2);
while ($row_product2 = mysqli_fetch_assoc($res_product2))
{
    
    $c_id = $row_product2['c_id'];
    $category = "SELECT * FROM category WHERE id = '$c_id' ";
    $res_catgory = mysqli_query($con, $category);
    $category_name = mysqli_fetch_assoc($res_catgory);

    $product2 .= '  

                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'" class="font-size-12 text-gray-5">'.$category_name['name'].'</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'" class="text-blue font-weight-bold">'.$row_product2['title'].'</a></h5>
                                        <div class="mb-2">
                                            <a href="'.$base_url.'single_product.php?pid='.$row_product2['id'].'" class="d-block text-center"><img class="img-fluid" style="height: 250px;" src="'.$base_url.'uplodes/products/'.$row_product2['img1'].'" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100"><b>£ '.$row_product2['price'].'</b></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                ';

}


$banner_product1 = '';
$get_banner_product1 = "SELECT * FROM product WHERE status = '1' ORDER BY id DESC LIMIT 5";
$res_banner_product1 = mysqli_query($con, $get_banner_product1);
while ($row_banner_product1 = mysqli_fetch_assoc($res_banner_product1))
{
    
    $c_id = $row_banner_product1['c_id'];
    $category = "SELECT * FROM category WHERE id = '$c_id' ";
    $res_catgory = mysqli_query($con, $category);
    $category_name = mysqli_fetch_assoc($res_catgory);
    $words = explode(" ", $row_banner_product1['title']);
    $banner_product1 .= ' 
                    <div class="js-slide bg-img-hero-center">
                        <div class="row min-height-420 py-7 py-md-0">
                            <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                <h1 class="font-size-64 text-lh-57 font-weight-light" data-scs-animation-in="fadeInUp"> '.substr($row_banner_product1['title'], 0, 28).' <span class="d-block font-size-55"></span></h1>
                                <h6 class="font-size-15 font-weight-bold mb-3"data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">'.$category_name['name'].'</h6>
                                <div class="mb-4"data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50 font-weight-bold text-lh-45">
                                    <sup class="">£</sup>'.$row_banner_product1['price'].'<sup class=""></sup>
                                </div>
                                </div>
                                <a href="'.$base_url.'single_product.php?pid='.$row_banner_product1['id'].'" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400"> Start Buying</a>
                            </div>
                            <div class="col-xl-5 col-6  d-flex align-items-center" data-scs-animation-in="zoomIn" data-scs-animation-delay="500"> 
                                <img class="img-fluid danner" src="'.$base_url.'uplodes/products/'.$row_banner_product1['img1'].'"  alt="Image Description">
                            </div>
                        </div>
                    </div>
                ';

}

// style="width: 416px; height: 420px;"

$saleproduct = '';
$get_saleproduct = "SELECT * FROM product WHERE status = '1' LIMIT 8";
$res_saleproduct = mysqli_query($con, $get_saleproduct);
while ($row_saleproduct = mysqli_fetch_assoc($res_saleproduct))
{
    
    $c_id = $row_saleproduct['c_id'];
    $category = "SELECT * FROM category WHERE id = '$c_id' ";
    $res_catgory = mysqli_query($con, $category);
    $category_name = mysqli_fetch_assoc($res_catgory);

    $saleproduct .= '  
                    <li class="col-6 col-wd-3 col-md-4 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="'.$base_url.'single_product.php?pid='.$row_saleproduct['id'].'" class="font-size-12 text-gray-5">'.$category_name['name'].'</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="#" class="text-blue font-weight-bold">'.$row_saleproduct['title'].'</a></h5>
                                    <div class="mb-2">
                                        <a href="'.$base_url.'single_product.php?pid='.$row_saleproduct['id'].'" class="d-block text-center"><img class="img-fluid" style="width: 212px; height: 200px;" src="'.$base_url.'uplodes/products/'.$row_saleproduct['img1'].'" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">£ '.$row_saleproduct['price'].'</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>    
                ';

}



$topproduct = '';
$get_topproduct = "SELECT * FROM product WHERE status = '1' LIMIT 8";
$res_topproduct = mysqli_query($con, $get_topproduct);
while ($row_topproduct = mysqli_fetch_assoc($res_topproduct))
{
    
    $c_id = $row_topproduct['c_id'];
    $category = "SELECT * FROM category WHERE id = '$c_id' ";
    $res_catgory = mysqli_query($con, $category);
    $category_name = mysqli_fetch_assoc($res_catgory);

    $topproduct .= '  
                    <li class="col-6 col-wd-3 col-md-4 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="'.$base_url.'single_product.php?pid='.$row_topproduct['id'].'" class="font-size-12 text-gray-5">'.$category_name['name'].'</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="#" class="text-blue font-weight-bold">'.$row_topproduct['title'].'</a></h5>
                                    <div class="mb-2">
                                        <a href="'.$base_url.'single_product.php?pid='.$row_topproduct['id'].'" class="d-block text-center"><img class="img-fluid" style="width: 212px; height: 200px;" src="'.$base_url.'uplodes/products/'.$row_topproduct['img1'].'" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">£ '.$row_topproduct['price'].'</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>    
                ';

}


?>