<?php  include '../config.php'; ?>
<?php  include 'admin_config.php'; ?>
<?php  include 'operations/add_product_op.php'; ?>


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
                      <div class="auth-form">
                        <h4 class="text-center mb-3">Add Your Product</h4>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-row"> 
                              <div class="form-group col-md-6">
                                  <label><strong>Product Name</strong></label>
                                  <input type="text" name="title" class="form-control" placeholder="Enter Product Title" required>
                              </div>
                              
                              <div class="form-group col-md-6">
                                  <label><strong>Product Price</strong></label>
                                  <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Short Description</strong></label>
                                    <textarea  name="shot_description" class="form-control" placeholder="Enter Short Description" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Description</strong></label>
                                    <textarea  name="description" class="form-control" placeholder="Enter Description" rows="8" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label><strong>Select Category</strong></label>
                                    <select id="inputState" name="category" class="form-control" required>
                                        <option value="" selected >Select Category</option>
                                        <?php echo $loade_category; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label><strong>Stock Count</strong></label>
                                  <input type="number" name="scount" class="form-control" placeholder="Enter Stock Count" required>
                                </div>
                                <div class="form-group col-md-4">
                                  <label><strong>Stock Type</strong></label>
                                  <select id="inputState" name="stock" class="form-control" required>
                                        <option value="" selected >Select Stock Type</option>
                                        <option value="1" >In Stock</option>
                                        <option value="0" >Out Stock</option>
                                  </select>
                                </div>
                            </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <label><strong>Uplode Your Product Image</strong></label>
                                <div class="image-container">
                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview1" alt="Image 1" >
                                      <input type="file" name="price1" id="file-input" accept="*/image" required>
                                    </div>
                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview2" alt="Image 2">
                                      <input type="file" name="price2" id="file-input2" accept="*/image" required>
                                    </div>
                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview3" alt="Image 3">
                                      <input type="file" name="price3" id="file-input3" accept="*/image">
                                    </div>
                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview4" alt="Image 4">
                                      <input type="file" name="price4" id="file-input4" accept="*/image">
                                    </div>
                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview5" alt="Image 5">
                                      <input type="file" name="price5" id="file-input5" accept="*/image">
                                    </div>

                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview6" alt="Image 6">
                                      <input type="file" name="price6" id="file-input6" accept="*/image">
                                    </div>

                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview7" alt="Image 7">
                                      <input type="file" name="price7" id="file-input7" accept="*/image">
                                    </div>

                                    <div class="image">
                                      <img src="https://via.placeholder.com/150x150" id="image-preview8" alt="Image 8">
                                      <input type="file" name="price8" id="file-input8" accept="*/image">
                                    </div>
                                </div>
                            </div>
        
                            <div class="text-center mt-4">
                                <button type="submit" name="add_product" class="btn btn-primary btn-block">Add new Product</button>
                            </div>
                        </form>
                          
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
<script src="vendor/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('description');</script>

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

<script>
    const fileInput6 = document.getElementById("file-input6");
    const imagePreview6 = document.getElementById("image-preview6");

    fileInput6.addEventListener("change", function() {
        const file56 = this.files[0];

        if (file6 && file6.type.startsWith("image/")) {
            const reader6 = new FileReader();
            reader6.onload = function(e) {
                imagePreview6.src = e.target.result;
            };
            reader6.readAsDataURL(file6);
        }
    });
</script>

<script>
    const fileInput7 = document.getElementById("file-input7");
    const imagePreview5 = document.getElementById("image-preview7");

    fileInput7.addEventListener("change", function() {
        const file7 = this.files[0];

        if (file7 && file7.type.startsWith("image/")) {
            const reader7 = new FileReader();
            reader7.onload = function(e) {
                imagePreview7.src = e.target.result;
            };
            reader7.readAsDataURL(file7);
        }
    });
</script>

<script>
    const fileInput8 = document.getElementById("file-input8");
    const imagePreview8 = document.getElementById("image-preview8");

    fileInput8.addEventListener("change", function() {
        const file8 = this.files[0];

        if (file8 && file8.type.startsWith("image/")) {
            const reader8 = new FileReader();
            reader8.onload = function(e) {
                imagePreview8.src = e.target.result;
            };
            reader8.readAsDataURL(file8);
        }
    });
</script>
    <!--  Footer Script end -->
    
  
</body>
</html>