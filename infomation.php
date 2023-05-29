<?php include 'config.php'; ?>
<?php include 'operations/infomation_op.php'; ?>
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
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="https://transvelo.github.io/electro-html/2.0/html/home/index.html">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Information From</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-5">
                    <h1 class="text-center">Information From</h1>
                </div>
                
                <form class="js-validate" method="POST" action="" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                            <div class="pl-lg-3 ">
                                <div class="bg-gray-1 rounded-lg">
                                    <!-- Order Summary -->
                                    <div class="p-4 mb-4 checkout-table">
                                        <!-- Title -->
                                        <div class="border-bottom border-color-1 mb-5">
                                            <h3 class="section-title mb-0 pb-2 font-size-25">Your order</h3>
                                        </div>
                                        <!-- End Title -->

                                        <!-- Product Content -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td><?php echo $product_data['title']; ?>&nbsp;<strong class="product-quantity">× <?php echo $_GET['qun']; ?></strong></td>
                                                    <td>£<?php echo $product_data['price'] * $_GET['qun']; ?></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <td><strong>£<?php echo $product_data['price'] * $_GET['qun']; ?></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- End Product Content -->
                                        <div class="border-top border-width-3 border-color-1 pt-3 mb-3">
                                            <!-- Basics Accordion -->
                                            <div id="basicsAccordion1">
                                                <!-- Card -->
                                                <div class="border-bottom border-color-1 border-dotted-bottom">
                                                    <div class="p-3" id="basicsHeadingFour">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" checked id="FourstylishRadio1" name="stylishRadio">
                                                            <label class="custom-control-label form-label" for="FourstylishRadio1" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour"> PayPal <a href="#" class="text-blue">What is PayPal?</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Card -->
                                            </div>
                                            <!-- End Basics Accordion -->
                                        </div>
                                        <button type="submit" name="ordernow" class="btn btn-primary-dark-w btn-block btn-pill font-size-20 mb-3 py-3">Place order</button>
                                    </div>
                                    <!-- End Order Summary -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 order-lg-1">
                            <div class="pb-7 mb-7">
                                <!-- Title -->
                                <div class="border-bottom border-color-1 mb-5">
                                    <h3 class="section-title mb-0 pb-2 font-size-25">Shipping Details details</h3>
                                </div>
                                <!-- End Title -->

                                <!-- Billing Form -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                First name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="fname" class="form-control" name="firstname" placeholder="Jack" aria-label="Jack" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Last name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="lname" name="lastname" placeholder="Wayley" aria-label="Wayley" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="w-100"></div>

                                   <!--  <div class="col-md-12">
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Company name (optional)
                                            </label>
                                            <input type="text" class="form-control" name="companyName" placeholder="Company Name" aria-label="Company Name" data-msg="Please enter a company name." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div> -->

                                    <div class="col-md-12">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Country
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="country" placeholder="Sri Lanka" aria-label="Sri Lanka" required="" data-msg="Please enter your Country." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-12">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Street address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="streetaddress" placeholder="470 Lucy Forks" aria-label="470 Lucy Forks" required="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                City
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="cityaddress" placeholder="London" aria-label="London" required="" data-msg="Please enter a valid address." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Postcode/Zip
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="zipcode" class="form-control" name="postcode" placeholder="99999" aria-label="99999" required="" data-msg="Please enter a postcode or zip code." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Email address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" name="emailaddress" placeholder="jackwayley@gmail.com" aria-label="jackwayley@gmail.com" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-6">
                                            <label class="form-label">
                                                Phone
                                            </label>
                                            <input type="text" id="mobile" class="form-control" name="phone" placeholder="+1 (062) 109-9222" aria-label="+1 (062) 109-9222" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="w-100"></div>
                                </div>
                                <!-- End Billing Form -->
                            </div>
                        </div>
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
        <script type="text/javascript">
            var firstNameInput = document.getElementById('fname');
            firstNameInput.addEventListener('input', function() {
              var value = this.value;
              if (value.length > 100) {alert('Maximum 100 characters allowed.');}//this.disabled = true;
            });

            var lname = document.getElementById('lname');
            lname.addEventListener('input', function() {
              var lvalue = this.lvalue;
              if (lvalue.length > 100) {alert('Maximum 100 characters allowed.');}//this.disabled = true;
            });

            var mobile = document.getElementById('mobile');
            mobile.addEventListener('input', function() {
              var mvalue = this.mvalue;
              if (mvalue.length > 100) {alert('Maximum 50 characters allowed.');}//this.disabled = true;
            });

            var zipcode = document.getElementById('zipcode');
            zipcode.addEventListener('input', function() {
              var zvalue = this.zvalue;
              if (zvalue.length > 100) {alert('Maximum 200 characters allowed.');}//this.disabled = true;
            });
        </script>
       </body>
</html>
