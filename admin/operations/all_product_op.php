<?php 

$select_product = "SELECT * FROM `product`";
$res = mysqli_query($con, $select_product);
$all_product = "";
while ($row = mysqli_fetch_assoc($res)) 
{
	if($row['status'] == "0")
	{
		$status = '<span class="badge badge-rounded badge-warning">Deactive</span>';
	}
	else if ($row['status'] == "1")
	{
		$status = '<span class="badge badge-rounded badge-success">Active</span>';
	}
	else
	{
		$status = '<span class="badge badge-rounded badge-danger">Error</span>';
	}

	$outstok = ''; $instock = '';
	if($row['stock'] =="0")
	{
		$outstok = "selected";
	}
	else
	{
		$instock = "selected";
	}

  $list_cat = '';
  $cat_qry="SELECT * FROM `category` ";
  $cat_result=mysqli_query($con,$cat_qry);
  while($cat_row=mysqli_fetch_array($cat_result))
  {
    $select ='';
    if($cat_row['id']==$row['c_id'])
    {
      $select ='selected';
    }

    $list_cat .= '
                  <option value="'.$cat_row['id'].'" '.$select.' data-tokens="'.$cat_row['name'].'">'.$cat_row['name'].'</option>
                 ';
  } 
	$all_product .= '

				<tr class="btn-reveal-trigger">
       	      		<td class="py-2">'.$row['id'].'</td>
       	      		<td class="py-2"><img src="'.$base_url.'uplodes/products/'.$row['img1'].'" style="height: 100px; width: 100px;" alt="Image 1" ></td>
       	      		<td class="py-2">'.$row['title'].'</td>
       	      		<td class="py-2">'.$row['price'].'</td>
       	      		<td class="py-2">'.$row['scount'].'</td>
       	      		<td class="py-2">'.$status.'</td>

       	      		<td>
       	        		<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#view_product_modal'.$row['id'].'"><i class="fa-solid fa-trash"></i></a>
       	        		<a href="javascript:void(0);" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edite_product_modal'.$row['id'].'"><i class="fa-solid fa-pen"></i></a>
       	    		</td>

                    <div id="view_product_modal'.$row['id'].'" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content p-2">
                                <div class="modal-header">
                                	<a class="btn btn-default" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i></a>
                                	<h4 class="modal-title"><h5>This is product ID '.$row['id'].'</h5></h4>
                                </div>
                                <div class="modal-body">
                                    <form id="product_'.$row['id'].'" class="forms-sample" action="" method="POST">
                                           <div class="form">
                                                  <input type="hidden" form="product_'.$row['id'].'" name="id" value="'.$row['id'].'">
                                                  
                                                  <lable>Are You Shuwar Delete To This Product  <b>'.$row['title'].'</lable><br>
                                                  <button class="btn-lg btn-danger mt-8" type="submit" name="delete_product" form="product_'.$row['id'].'" > Delete Product </button>
                                           </div> 
                                    </form> 
                                </div> 
                            </div> 
                        </div> 
                    </div>


                    <div id="edite_product_modal'.$row['id'].'" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content p-2">
                                <div class="modal-header">
                                    <a class="btn btn-default" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i></a>
                                    <h4 class="modal-title"><h5>This is product ID '.$row['id'].'</h5></h4>
                                </div>
                                <div class="modal-body">
                                    <form id="product_'.$row['id'].'" class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                           <div class="form">
                                                  <input type="hidden" form="product_'.$row['id'].'" name="id" value="'.$row['id'].'">
                                                  
                                                  <input type="hidden" form="product_'.$row['id'].'" name="img1" value="'.$row['img1'].'">

                                                  <input type="hidden" form="product_'.$row['id'].'" name="img2" value="'.$row['img2'].'">

                                                  <input type="hidden" form="product_'.$row['id'].'" name="img3" value="'.$row['img3'].'">

                                                  <input type="hidden" form="product_'.$row['id'].'" name="img4" value="'.$row['img4'].'">

                                                  <input type="hidden" form="product_'.$row['id'].'" name="img5" value="'.$row['img5'].'">


                                                <div class="form-row"> 
                                          <div class="form-group col-md-6">
                                              <label><strong>Product Name</strong></label>
                                              <input type="text" name="title" class="form-control" value="'.$row['title'].'" placeholder="Enter Product Title" required form="product_'.$row['id'].'">
                                          </div>
                                          
                                          <div class="form-group col-md-6">
                                              <label><strong>Product Price</strong></label>
                                              <input type="text" name="price" class="form-control" value="'.$row['price'].'" placeholder="Enter Price" required form="product_'.$row['id'].'">
                                          </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label><strong>Short Description</strong></label>
                                                <textarea  name="shot_description" form="product_'.$row['id'].'" class="form-control" placeholder="Enter Short Description" rows="3" required>'.nl2br($row['short_description']).'</textarea>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label><strong>Description</strong></label>
                                                <textarea  name="description" form="product_'.$row['id'].'" class="form-control" placeholder="Enter Description" rows="8" required=>'.nl2br($row['description']).'</textarea>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label><strong>Select Category</strong></label>
                                                <select id="inputState" form="product_'.$row['id'].'" name="category" class="form-control" required="">
                                                    <option value="" selected >Select Category</option>
                                                    '. $list_cat.'
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label><strong>Stock Count</strong></label>
                                              <input type="number" name="scount" form="product_'.$row['id'].'" value="'.$row['scount'].'" class="form-control" placeholder="Enter Stock Count" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label><strong>Stock Type</strong></label>
                                              <select id="inputState" name="stock" form="product_'.$row['id'].'" class="form-control" required>
                                                    <option value="" selected >Select Stock Type</option>
                                                    <option value="1" '.$instock.' >In Stock</option>
                                                    <option value="0" '.$outstok.' >Out Stock</option>
                                              </select>
                                            </div>
                                        </div>
                                            
                                        
                                        
                                        <div class="form-group" form="product_'.$row['id'].'">
                                            <label form="product_'.$row['id'].'"><strong>Uplode Your Product Image</strong></label>
                                            <div form="product_'.$row['id'].'" class="image-container">
                                                <div form="product_'.$row['id'].'" class="image">
                                                  <img src="'.$base_url.'uplodes/products/'.$row['img1'].'" id="image-preview1" alt="Image 1" >
                                                  <input type="file" name="price1" form="product_'.$row['id'].'" id="file-input" accept="*/image" >
                                                </div>
                                                <div class="image">
                                                  <img src="'.$base_url.'uplodes/products/'.$row['img2'].'" id="image-preview2" alt="Image 2">
                                                  <input type="file" name="price2" form="product_'.$row['id'].'" id="file-input2" accept="*/image" >
                                                </div>
                                                <div class="image">
                                                  <img src="'.$base_url.'uplodes/products/'.$row['img3'].'" id="image-preview3" alt="Image 3">
                                                  <input type="file" name="price3" form="product_'.$row['id'].'" id="file-input3" accept="*/image">
                                                </div>
                                                <div class="image">
                                                  <img src="'.$base_url.'uplodes/products/'.$row['img4'].'" id="image-preview4" alt="Image 4">
                                                  <input type="file" name="price4" form="product_'.$row['id'].'" id="file-input4" accept="*/image">
                                                </div>
                                                <div class="image">
                                                  <img src="'.$base_url.'uplodes/products/'.$row['img5'].'" id="image-preview5" alt="Image 5">
                                                  <input type="file" name="price5" form="product_'.$row['id'].'" id="file-input5" accept="*/image">
                                                </div>
                                            </div>
                                        </div>


                                                  <button class="btn-lg btn-primary mt-8" type="submit" name="update_product" form="product_'.$row['id'].'" > Delete Product </button>
                                           </div> 
                                    </form> 
                                </div> 
                            </div> 
                        </div> 
                    </div>


                    

            	</tr>     
				';
}


if(isset($_POST['update_product']))
{

        $ph1 = $_FILES['price1']['name'] ?? NULL;
        $ph2 = $_FILES['price2']['name'] ?? NULL;
        $ph3 = $_FILES['price3']['name'] ?? NULL;
        $ph4 = $_FILES['price4']['name'] ?? NULL;
        $ph5 = $_FILES['price5']['name'] ?? NULL;
    
        //file tamp names
        $t_ph1 = $_FILES['price1']['tmp_name'];
        $t_ph2 = $_FILES['price2']['tmp_name'];
        $t_ph3 = $_FILES['price3']['tmp_name'];
        $t_ph4 = $_FILES['price4']['tmp_name'];
        $t_ph5 = $_FILES['price5']['tmp_name'];
        //upload directories with names
        $fd1 = '../uplodes/products/'.$ph1;
        $fd2 = '../uplodes/products/'.$ph2;
        $fd3 = '../uplodes/products/'.$ph3;
        $fd4 = '../uplodes/products/'.$ph4;
        $fd5 = '../uplodes/products/'.$ph5;

	if($_POST['title'] != "" AND $_POST['price'] != "" AND $_POST['shot_description'] != "" AND $_POST['category'] !="" AND $_POST['description'] != ""  AND $_POST['scount'] != "" AND $_POST['stock'] != "")
	{
		$id  = mysqli_real_escape_string($con,$_POST['id']);

		$title  = mysqli_real_escape_string($con,$_POST['title']);

		$price  = mysqli_real_escape_string($con,$_POST['price']);

		$shot_description  = mysqli_real_escape_string($con,$_POST['shot_description']);

		$description  = mysqli_real_escape_string($con,$_POST['description']);

		$category  = mysqli_real_escape_string($con,$_POST['category']);

		$scount  = mysqli_real_escape_string($con,$_POST['scount']);

		$stock  = mysqli_real_escape_string($con,$_POST['stock']);

  

		   
		
		$img1 = ''; $img2 = ''; $img3 = ''; $img4 = ''; $img5 = '';
    	if($ph1 =="")
    	{
    	  $img1 = $_POST['img1'];
    	}
    	else
    	{
    	  $img1 = $ph1;
    	}
	
    	if($ph2 =="")
    	{
    	  $img2 = $_POST['img2'];
    	}
    	else
    	{
    	  $img2 = $ph2;
    	}
	
    	if($ph3 =="")
    	{
    	  $img3 = $_POST['img3'];
    	}
    	else
    	{
    	  $img3 = $ph3;
    	}
	
    	if($ph4 =="")
    	{
    	  $img4 = $_POST['img4'];
    	}
    	else
    	{
    	  $img4 = $ph4;
          
    	}
	
    	if($ph5 =="")
    	{
    	  $img5 = $_POST['img5'];
    	}
    	else
    	{
    	  $img5 = $ph5;
    	}

    	    
		move_uploaded_file($t_ph1, $fd1); move_uploaded_file($t_ph2, $fd2);  move_uploaded_file($t_ph3, $fd3);  move_uploaded_file($t_ph4, $fd4);  move_uploaded_file($t_ph5, $fd5);
			
		$insert_product = "UPDATE `product` SET `c_id` = '$category', `title` = '$title', `short_description` = '$shot_description', `description` = '$description', `price` = '$price', `img1` = '$img1', `img2` = '$img2', `img3` = '$img3', `img4` = '$img4', `img5` = '$img5', `stock` = '$stock', `scount` = '$scount' WHERE `id` = '$id'";
		if(mysqli_query($con, $insert_product))
		{
			header("Location: ".$base_url."admin/all_product.php?alert=success&alert_message=Add Product Successful&alert_text= Done.");
		}
		else
		{
			header("Location: ".$base_url."admin/all_product.php?alert=error&alert_message=Add Product Faild&alert_text= Faild.");
		}	
	}
	else
	{
		header("Location: ".$base_url."admin/all_product.php?alert=error&alert_message=Product details Are empty Faild&alert_text= Faild.");
	} 

}


if(isset($_POST['delete_product']))
{
    $id  = mysqli_real_escape_string($con,$_POST['id']);
    $delete = "DELETE FROM `product` WHERE id = '$id'";
    if(mysqli_query($con, $delete))
    {
        header("Location: ".$base_url."admin/all_product.php?alert=success&alert_message=Delete Product Successful&alert_text= Done.");
    }
    else
    {
        header("Location: ".$base_url."admin/all_product.php?alert=error&alert_message=Delete Product Faild&alert_text= Faild.");
    }
}

?>