<?php  include '../config.php'; ?>
<?php  include 'operations/oders_op.php'; ?>
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
            <div class="container-fluid">
              <div class="row"> <!-- row -->
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">All Order List</h4>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="example" class="table table-sm mb-0 table-striped">
                                    <thead>
                                        <tr>
                                          <th class="py-3">Order ID</th>
                                          <th class="py-3">Item Name</th>
                                          <th class="py-3">Item Quantity</th>
                                          <th class="py-3">Price</th>
                                          <th class="py-3">Delivery address</th>
                                          <th class="py-3">Email</th>
                                          <th class="py-3">Date</th>
                                          <th class="py-3">Status</th>
                                          <th class="py-3">Edite</th>
                                        </tr>
                                    </thead>
                                    <tbody id="customers">
                                        <?php echo $all_odears; ?>
                                    </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
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

    <div class="row">
      <div class="col-md-6">
        <label>First Name</label>
        <input type="text" class="form-control" name="fname" value="">
      </div>
      <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="lname" value="">
      </div>
    </div>
</body>
</html>