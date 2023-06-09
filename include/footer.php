 <footer>
            <!-- Footer-newsletter -->
            <div class="bg-primary py-3">
                <div class="container">
                    <!-- <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-auto flex-horizontal-center">
                                    <i class="ec ec-newsletter font-size-40"></i>
                                    <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                                </div>
                                <div class="col my-4 my-md-0">
                                    <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            
                            <form class="js-validate js-form-message">
                                <label class="sr-only" for="subscribeSrEmail">Email address</label>
                                <div class="input-group input-group-pill">
                                    <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- End Footer-newsletter -->
            <!-- Footer-bottom-widgets -->
            <div class="pt-8 pb-4 bg-gray-13">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-6">
                                <a href="#" class="d-inline-block">
                                    <img src="assets/logo.jpg" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <i class="ec ec-support text-primary font-size-56"></i>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                        <a href="tel:+447914114923" class="font-size-20 text-gray-90">+44 7914 114923 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1 font-weight-bold">Contact info</h6>
                                <address class="">
                                    25 Ashdown Rd, Reigate RH2 7QW
                                </address>
                            </div>
                            <div class="my-4 my-md-4">
                                <ul class="list-inline mb-0 opacity-7">
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-google btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-twitter btn-icon__inner"></span>
                                        </a>
                                    </li>
                                   <!--  <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-github btn-icon__inner"></span>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <?php 
                                            $selet = "SELECT * FROM `product` LIMIT 7";
                                            $res = mysqli_query($con, $selet);
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                                echo $list = '<li><a class="list-group-item list-group-item-action" href="#">'.substr($row['title'], 0, 28).'</a></li>';
                                            }

                                            ?>
                                       <!--  <li><a class="list-group-item list-group-item-action" href="#">Laptops & Computers</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Cameras & Photography</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Smart Phones & Tablets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Video Games & Consoles</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">TV & Audio</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Gadgets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Car Electronic & GPS</a></li> -->
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                               <!-- <div class="col-12 col-md mb-4 mb-md-0">
                                   
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                        <li><a class="list-group-item list-group-item-action" href="#">Printers & Ink</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Software</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Office Supplies</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Computer Components</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Accesories</a></li>
                                    </ul>
                                    
                                </div> -->

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                       <!--  <li><a class="list-group-item list-group-item-action" href="#">My Account</a></li> -->
                                        <li><a class="list-group-item list-group-item-action" href="#">Order Tracking</a></li>
                                       <!--  <li><a class="list-group-item list-group-item-action" href="#">Wish List</a></li> -->
                                        <li><a class="list-group-item list-group-item-action" href="#">Customer Service</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="#">Returns / Exchange</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="about.php">FAQs</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="contact.php">Product Support</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-bottom-widgets -->
            <!-- Footer-copy-right -->
            <div class="bg-gray-14 py-2">
                <div class="container">
                    <div class="flex-center-between d-block d-md-flex">
                        <div class="mb-3 mb-md-0">© <a href="http://eprogrammers.lk/" class="font-weight-bold text-gray-90">E-Programmers</a> - All rights Reserved</div>
                        <div class="text-md-right">
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img1.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img2.jpg" alt="Image Description">
                            </span>
                        
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img5.jpg" alt="Image Description">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-copy-right -->
        </footer>