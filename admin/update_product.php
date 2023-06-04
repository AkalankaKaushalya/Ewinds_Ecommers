<?php  include '../config.php'; ?>
<?php  include 'admin_config.php'; ?>
<?php  include 'operations/update_product_op.php'; ?>
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
                        <h4 class="text-center mb-3">Update Your Product</h4>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-row"> 

                                <input type="hidden" name="img1" value="<?php echo $product_row['img1']; ?>">

                                <input type="hidden" name="img2" value="<?php echo $product_row['img2']; ?>">

                                <input type="hidden" name="img3" value="<?php echo $product_row['img3']; ?>">

                                <input type="hidden" name="img4" value="<?php echo $product_row['img4']; ?>">

                                <input type="hidden" name="img5" value="<?php echo $product_row['img5']; ?>">

                              <div class="form-group col-md-6">
                                  <label><strong>Product Name</strong></label>
                                  <input type="text" name="title" class="form-control" placeholder="Enter Product Title" value="<?php echo $product_row['title']; ?>" required>
                              </div>
                              
                              <div class="form-group col-md-6">
                                  <label><strong>Product Price</strong></label>
                                  <input type="text" name="price" class="form-control" placeholder="Enter Price" value="<?php echo $product_row['price']; ?>" required>
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Short Description</strong></label>
                                    <textarea  name="shot_description" class="form-control" placeholder="Enter Short Description" rows="3" required><?php echo nl2br($product_row['short_description']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Description</strong></label>
                                    <textarea  name="description" class="form-control" placeholder="Enter Description" rows="8" required=""><?php echo nl2br($product_row['description']); ?></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label><strong>Select Category</strong></label>
                                    <select id="inputState" name="category" class="form-control" required>
                                        <option value="" selected >Select Category</option>
                                        <?php echo $$list_cat; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label><strong>Stock Count</strong></label>
                                  <input type="number" name="scount" class="form-control" placeholder="Enter Stock Count" value="<?php echo $product_row['scount']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                  <label><strong>Stock Type</strong></label>
                                  <select id="inputState" name="stock" class="form-control" required>
                                        <option value="" selected >Select Stock Type</option>
                                        <option value="1" <?php echo $instock; ?> >In Stock</option>
                                        <option value="0" <?php echo $outstok; ?> >Out Stock</option>
                                  </select>
                                </div>
                            </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <label><strong>Uplode Your Product Image</strong></label>
                                <div class="image-container">
                                    <div class="image">
                                      <img src="<?php echo $base_url.'uplodes/products/'.$product_row['img1'];?>" id="image-preview1" alt="Image 1" >
                                      <input type="file" name="price1" id="file-input" accept="*/image" >
                                    </div>
                                    <div class="image">
                                      <img src="<?php echo $base_url.'uplodes/products/'.$product_row['img2'];?>" id="image-preview2" alt="Image 2">
                                      <input type="file" name="price2" id="file-input2" accept="*/image" >
                                    </div>
                                    <div class="image">
                                      <img src="<?php echo $base_url.'uplodes/products/'.$product_row['img3'];?>" id="image-preview3" alt="Image 3">
                                      <input type="file" name="price3" id="file-input3" accept="*/image">
                                    </div>
                                    <div class="image">
                                      <img src="<?php echo $base_url.'uplodes/products/'.$product_row['img4'];?>" id="image-preview4" alt="Image 4">
                                      <input type="file" name="price4" id="file-input4" accept="*/image">
                                    </div>
                                    <div class="image">
                                      <img src="<?php echo $base_url.'uplodes/products/'.$product_row['img5'];?>" id="image-preview5" alt="Image 5">
                                      <input type="file" name="price5" id="file-input5" accept="*/image">
                                    </div>
                                </div>
                            </div>
        
                            <div class="text-center mt-4">
                                <button type="submit" name="update_product" class="btn btn-primary">Update this  Product</button>
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