<?php

$product1 = '';
$get_product1 = "SELECT * FROM product WHERE status = '1'";
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


?>