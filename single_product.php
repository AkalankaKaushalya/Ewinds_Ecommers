<?php include 'config.php'; ?>
<?php include 'operations/single_product_op.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'include/hader.php' ?>   
</head>

    <body>

        <!-- ========== HEADER ========== -->
         <?php require 'include/navbar.php' ?>
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="shop.php">Shop</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?php echo $base_url.'shop.php?cid='.$category_name['id']; ?>"><?php echo $category_name['name']; ?></a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><?php echo $product_data['title']; ?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="row">
                    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                        <div class="mb-8">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
                            </div>
                            <ul class="list-unstyled">
                                <!-- <li class="mb-4">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="single-product-fullwidth.html" class="d-block width-75">
                                                <img class="img-fluid" src="assets/img/300X300/img1.jpg" alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="single-product-fullwidth.html">Notebook Black Spire V Nitro VN7-591G</a></h3>
                                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                            <div class="font-weight-bold">
                                                <del class="font-size-11 text-gray-9 d-block">$2299.00</del>
                                                <ins class="font-size-15 text-red text-decoration-none d-block">$1999.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                 <?php echo $product1; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-9 col-wd-9gdot5">
                        <div class="mb-xl-14 mb-6">
                            <div class="row">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                        data-infinite="true" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4" data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4" data-nav-for="#sliderSyncingThumb">
                                        <?php echo $img1; ?>
                                        <?php echo $img2; ?>
                                        <?php echo $img3; ?>
                                        <?php echo $img4; ?>
                                        <?php echo $img5; ?>
                                        <?php echo $img6; ?>
                                        <?php echo $img7; ?>
                                        <?php echo $img8; ?>
                                    </div>

                                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="5" data-is-thumbs="true" data-nav-for="#sliderSyncingNav">
                                        <?php echo $img1; ?>
                                        <?php echo $img2; ?>
                                        <?php echo $img3; ?>
                                        <?php echo $img4; ?>
                                        <?php echo $img5; ?>
                                        <?php echo $img6; ?>
                                        <?php echo $img7; ?>
                                        <?php echo $img8; ?>
                                    </div>
                                </div>
                                <div class="col-md-7 mb-md-6 mb-lg-0">
                                    <div class="mb-2">
                                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block"><?php echo $category_name['name']; ?></a>
                                            <h2 class="font-size-25 text-lh-1dot2"><?php echo $product_data['title']; ?></h2>
                                            <div class="d-md-flex align-items-center">
                                                <!-- <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0 d-block"><img class="img-fluid" src="assets/img/200X60/img1.png" alt="Image Description"></a> -->
                                                <div class="ml-md-3 text-gray-9 font-size-14">Availability: <span class=" <?php if($product_data['stock'] == "1"){echo "text-green";} else{ echo "text-red";} ?> font-weight-bold"><?php echo $product_data['scount']; ?> <?php if($product_data['stock'] == "1"){echo "in stock";} else{ echo "Out stock";} ?></span></div>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <!-- <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                                <li>4.5 inch HD Touch Screen (1280 x 720)</li>
                                                <li>Android 4.4 KitKat OS</li>
                                                <li>1.4 GHz Quad Core™ Processor</li>
                                                <li>20 MP Electro and 28 megapixel CMOS rear camera</li>
                                            </ul> -->
                                            <p><?php echo nl2br($product_data['short_description']); ?></p>
                                        </div>
                                       
                                        <p><strong>SKU</strong>: #<?php echo $product_data['id']; ?></p>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-baseline">
                                                <ins class="font-size-36 text-decoration-none">£<?php echo $product_data['price']; ?></ins>
                                            </div>
                                        </div>
                                        <form method="POST" action="">
                                            <div class="d-md-flex align-items-end mb-3">
                                                <div class="max-width-150 mb-4 mb-md-0">
                                                    <h6 class="font-size-14"><b>Quantity</b></h6>
                                                    <input type="hidden" name="product_no" value="<?php echo $product_data['id']; ?>">
                                                    <div class="border rounded-pill py-2 px-3 border-color-1">
                                                        <div class="js-quantity row align-items-center">
                                                            <div class="col">
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="number" name="quantity" value="1" min="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-md-3">
                                                    <button type="submit" name="buy" class="btn px-5 btn-primary-dark transition-3d-hover">Buy This Product</button>
                                                    <!-- <a href="<?php echo $base_url.'infomation.php?pid='.$product_data['id'].'&qt='.$_POST['quantity']; ?>" class="btn px-5 btn-primary-dark transition-3d-hover">Buy This Product</a>-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product Body -->
                        <!-- Single Product Tab -->
                        <div class="mb-8">
                            <div class="position-relative mx-md-6">
                                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">

                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" id="Jpills-two-example1-tab" data-toggle="pill" href="#Jpills-one-example1" role="tab" aria-controls="Jpills-one-example1" aria-selected="true">Description</a>
                                    </li>
                                   <!--  <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link active" id="Jpills-one-example1-tab" data-toggle="pill" href="#Jpills-one-example1" role="tab" aria-controls="Jpills-one-example1" aria-selected="true">Accessories</a>
                                    </li> -->
                                    
                                   <!--  <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" id="Jpills-three-example1-tab" data-toggle="pill" href="#Jpills-three-example1" role="tab" aria-controls="Jpills-three-example1" aria-selected="false">Specification</a>
                                    </li>
                                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                                        <a class="nav-link" id="Jpills-four-example1-tab" data-toggle="pill" href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1" aria-selected="false">Reviews</a>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- Tab Content -->
                            <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 px-xl-4 px-wd-10 py-lg-9 py-xl-5 py-wd-9">
                                <div class="tab-content" id="Jpills-tabContent">

                                    

                                    <div class="tab-pane fade active show" id="Jpills-one-example1" role="tabpanel" aria-labelledby="Jpills-one-example1">
                                        <h3 class="font-size-24 mb-3">Perfectly Done</h3>
                                        <p><?php echo nl2br($product_data['description']); ?></p>
                                        
                                        <!-- <ul class="nav flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                            <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>SKU:</strong> <span class="sku">FW511948218</span></li>
                                            <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                            <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Category:</strong> <a href="#" class="text-blue">Headphones</a></li>
                                            <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                                            <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Tags:</strong> <a href="#" class="text-blue">Fast</a>, <a href="#" class="text-blue">Gaming</a>, <a href="#" class="text-blue">Strong</a></li>
                                        </ul> -->
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- Single Product Tab -->
                    </div>
                </div>
               
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
            <?php require 'include/footer.php' ?>
        <!-- ========== END FOOTER ========== -->

       
        <!-- Account Sidebar Navigation -->
            <?php require 'include/sidebar.php' ?>
        <!-- End Account Sidebar Navigation -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->

        <!-- JS Global Compulsory -->
        <?php require 'include/script.php' ?>
    </body>
</html>
