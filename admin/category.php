<?php  include '../config.php'; ?>
<?php  include 'operations/all_and_add_category_op.php'; ?>


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
                        <div class="auth-form col-md-6">
                          <h4 class="text-center mb-3">Add Category</h4>
                          <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-row"> 
                                <div class="form-group col-md-12">
                                    <label><strong>Category Name</strong></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Category Name" required>
                                </div>
                              </div>
                              <div class="text-center mt-4">
                                  <button type="submit" name="add_category" class="btn btn-primary btn-block">Add Category</button>
                              </div>
                          </form>
                        </div>

                        <div class="col-lg-6">
                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">Category List</h4>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="example" class="table table-sm mb-0 table-striped">
                                    <thead>
                                        <tr>
                                          <th class="py-3">Category ID</th>
                                          <th class="px-5 py-3">Name</th>
                                          <th class="py-3">Status</th>
                                          <th class="py-3">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody id="customers">
                                              <?php echo $category; ?>
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
    <!--  Footer Script end -->
    
  
</body>
</html>