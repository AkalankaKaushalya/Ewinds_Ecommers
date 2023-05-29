<?php include '../config.php'; ?>
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
						<div class="widget-stat card bg-primary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Customers</p>
										<h3 class="text-white"><?php #echo $total_users; ?></h3>
										
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
										<i class="fa-solid fa-car"></i>
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
						<div class="widget-stat card bg-secondary">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa-solid fa-building"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Sevice Transaction</p>
										<h3 class="text-white"><?php #echo $total_service_service; ?></h3>
										
									</div>
								</div>
							</div>
						</div>
                    </div>
					<!-- <div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body">
								<div class="media">
									<span class="mr-3">
										<i class="fa-sharp fa-solid fa-wrench"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">All Parts Ads</p>
										<h3 class="text-white"><?php #echo $total_service_parts; ?></h3>
									</div>
								</div>
							</div>
						</div>
                    </div> -->
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