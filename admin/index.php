<?php include '../config.php'; ?>
<?php  include 'admin_config.php'; ?>
<?php include 'operations/index_op.php'; ?>
<?php #require 'dash_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/hedar.php' ?>
</head>

<body>

   
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader end -->
    

    
     
    <!-- Main wrapper start -->
    <div id="main-wrapper"> 

       
        <!--  Nav header start -->
         <?php require 'include/navbar.php' ?>
        <!--  Nav header End -->


        <!-- Sidebar start -->
        <?php require 'include/sidebar.php' ?>
        <!-- Sidebar end -->
        

        
        <!-- Content body start -->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa-sharp fa-solid fa-cash-register"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total New Orders</p>
										<h3 class="text-white"><?php echo $total_new_orders; ?></h3>
										
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa-sharp fa-solid fa-bag-shopping"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">All Products</p>
										<h3 class="text-white"><?php echo $total_product; ?></h3>
										
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa-solid fa-truck"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total New Delivery</p>
										<h3 class="text-white"><?php echo $total_Delivery; ?></h3>
										
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa-solid fa-cube"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">All Category</p>
										<h3 class="text-white"><?php echo $total_category; ?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>
            </div>
        </div>
        <!-- Content body end -->
        


        
        <!-- Footer start -->
        <?php require 'include/footer.php' ?>
        <!--  Footer end -->	

    </div>
    <!--  Main wrapper end -->
    

    <!-- Footer Script start -->
        <?php require 'include/footer_script.php' ?>
    <!--  Footer Script end -->
    
	
</body>
</html>