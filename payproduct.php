<?php include 'config.php'; ?>
<?php include 'operations/payproduct_op.php'; ?>
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
        <main id="content" role="main" class="checkout-page">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Order Infomation</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-5">
                    <h1 class="text-center">Order Infomation</h1>
                </div>
                
                <form class="js-validate" method="POST" action="<?php echo PAYPAL_URL; ?>" novalidate="novalidate">

                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                    <!-- Specify a buy now button -->
                    <input type="hidden" name="cmd" value="_xclick">
                    <!-- Specify details about the item that buyers will purchase -->
                    <input type="hidden" name="item_name" value="<?php echo $product_data['title']; ?>">

                    <input type="hidden" name="item_number" value="<?php echo $get_orderdata['p_id']; ?>">

                    <input type="hidden" name="amount" value="<?php echo $product_data['price']; ?>">

                    <input type="hidden" name="quantity" value="<?php echo $get_orderdata['p_quantity']; ?>">

                    <!-- Specify custom parameters -->
                    <input type="hidden" name="custom" value="<?php echo $_GET['oid']; ?>">

                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">

                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">

                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10 order-lg-10 mb-7 mb-lg-0">
                            <div class="pl-lg-3 ">
                                <div class="bg-gray-1 rounded-lg">
                                    <div class="p-4 mb-4 checkout-table"><!-- Order Summary -->
                                        <div class="border-bottom border-color-1 mb-5"><!-- Title -->
                                            <h3 class="section-title mb-0 pb-2 font-size-25">Your Order</h3>
                                        </div><!-- End Title -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td><?php echo $product_data['title']; ?>&nbsp;<strong class="product-quantity">× <?php echo $get_orderdata['p_quantity']; ?></strong></td>
                                                    <td>£<?php echo $product_data['price'] * $get_orderdata['p_quantity']; ?></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <td><strong>£<?php echo $product_data['price'] * $get_orderdata['p_quantity']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <td><strong><?php echo $get_orderdata['odear_id']; ?></strong></td>
                                                </tr>

                                                <tr>
                                                    <th>Delivery address</th>
                                                    <td><strong><?php echo $get_orderdata['address']; ?></strong></td>
                                                </tr>

                                                <tr>
                                                    <th>Your Email</th>
                                                    <td><strong><?php echo $get_orderdata['email']; ?></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="border-top border-width-3 border-color-1 pt-3 mb-3"><!-- End Product Content -->
                                            <div id="basicsAccordion1"><!-- Basics Accordion -->
                                                <div class="border-bottom border-color-1 border-dotted-bottom"><!-- Card -->
                                                    <div class="p-3" id="basicsHeadingFour">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" checked id="FourstylishRadio1" name="stylishRadio">
                                                            <label class="custom-control-label form-label" for="FourstylishRadio1" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour"> PayPal <a href="#" class="text-blue">What is PayPal?</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!-- End Card -->
                                            </div><!-- End Basics Accordion -->
                                        </div>
                                        <button type="submit" name="ordernow" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Buy This Product</button>
                                    </div><!-- End Order Summary -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </form>
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
