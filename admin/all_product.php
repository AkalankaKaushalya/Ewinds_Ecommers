<?php  include '../config.php'; ?>
<?php  include 'admin_config.php'; ?>
<?php  include 'operations/all_product_op.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'include/hedar.php' ?>
<style>
  #image-preview {
    width: 100px;
    height: 100px;
    object-fit: cover;
    cursor: pointer;
    position: relative;
    border: 3px;
    border-radius: 50px;
  
  }
  
  #file-input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
     border-radius: 50px;
  
  }


    .image-container {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    .image {
      position: relative;
      width: 150px;
      height: 150px;
      margin-right: 10px;
      margin-bottom: 10px;
      background-color: #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .image img {
      max-width: 100%;
      max-height: 100%;
      display: block;
    }

    .upload {
      width: 150px;
      height: 150px;
      margin-right: 10px;
      margin-bottom: 10px;
      background-color: #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      overflow: hidden;
    }

    .upload label {
      cursor: pointer;
    }

    .upload input[type="file"] {
      display: none;
    }

    .upload img {
      max-width: 100%;
      max-height: 100%;
      display: block;
    }

    .image input[type="file"] {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      cursor: pointer;
    }

  .auth-form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
  } 
</style>
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
                              <h4 class="card-title">All Product List</h4>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="example" class="table table-sm mb-0 table-striped">
                                    <thead>
                                        <tr>
                                          <th class="py-3">Product ID</th>
                                          <th class="px-5 py-3">Image</th>
                                          <th class="px-5 py-3">Title</th>
                                          <th class="py-3">Price</th>
                                          <th class="py-3">Stoc Count</th>
                                          <th class="py-3">Status</th>
                                          <th class="py-3">Edite</th>
                                        </tr>
                                    </thead>
                                    <tbody id="customers">
                                        <?php echo $all_product; ?>
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
<script>
    const fileInput1 = document.getElementById("file-input");
    const imagePreview1 = document.getElementById("image-preview1");

    fileInput1.addEventListener("change", function() {
        const file1 = this.files[0];

        if (file1 && file1.type.startsWith("image/")) {
            const reader1 = new FileReader();
            reader1.onload = function(e) {
                imagePreview1.src = e.target.result;
            };
            reader1.readAsDataURL(file1);
        }
    });
</script>

<script>
    const fileInput2 = document.getElementById("file-input2");
    const imagePreview2 = document.getElementById("image-preview2");

    fileInput2.addEventListener("change", function() {
        const file2 = this.files[0];

        if (file2 && file2.type.startsWith("image/")) {
            const reader2 = new FileReader();
            reader2.onload = function(e) {
                imagePreview2.src = e.target.result;
            };
            reader2.readAsDataURL(file2);
        }
    });
</script>

<script>
    const fileInput3 = document.getElementById("file-input3");
    const imagePreview3 = document.getElementById("image-preview3");

    fileInput3.addEventListener("change", function() {
        const file3 = this.files[0];

        if (file3 && file3.type.startsWith("image/")) {
            const reader3 = new FileReader();
            reader3.onload = function(e) {
                imagePreview3.src = e.target.result;
            };
            reader3.readAsDataURL(file3);
        }
    });
</script>

<script>
    const fileInput4 = document.getElementById("file-input4");
    const imagePreview4 = document.getElementById("image-preview4");

    fileInput4.addEventListener("change", function() {
        const file4 = this.files[0];

        if (file4 && file4.type.startsWith("image/")) {
            const reader4 = new FileReader();
            reader4.onload = function(e) {
                imagePreview4.src = e.target.result;
            };
            reader4.readAsDataURL(file4);
        }
    });
</script>

<script>
    const fileInput5 = document.getElementById("file-input5");
    const imagePreview5 = document.getElementById("image-preview5");

    fileInput5.addEventListener("change", function() {
        const file5 = this.files[0];

        if (file5 && file5.type.startsWith("image/")) {
            const reader5 = new FileReader();
            reader5.onload = function(e) {
                imagePreview5.src = e.target.result;
            };
            reader5.readAsDataURL(file5);
        }
    });
</script>
    <!--  Footer Script end -->
</body>
</html>