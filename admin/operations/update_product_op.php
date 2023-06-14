<?php 
if(isset($_GET['pid']))
{
	$pid = $_GET['pid'];
	$select_product = "SELECT *,COUNT(id) AS count FROM `product` WHERE id = '$pid'";
	$res = mysqli_query($con, $select_product);
  	$product_row=mysqli_fetch_array($res);
  	if($product_row['count']  == 1)
  	{

  		$outstok = ''; $instock = '';
		if($product_row['stock'] =="0")
		{
			$outstok = "selected";
		}
		else
		{
			$instock = "selected";
		}


		$list_cat = '';
  		$cat_qry="SELECT * FROM `category`";
  		$cat_result=mysqli_query($con,$cat_qry);
  		while($cat_row=mysqli_fetch_array($cat_result))
  		{
  		  $select ='';
  		  if($cat_row['id']==$product_row['c_id'])
  		  {
  		    $select ='selected';
  		  }
		
  		  $list_cat .= '
  		                <option value="'.$cat_row['id'].'" '.$select.' data-tokens="'.$cat_row['name'].'">'.$cat_row['name'].'</option>
  		               ';
  		} 
  	}else
  	{
  		header("Location: ".$base_url."admin/all_product.php");
  	}
}
else
{
	header("Location: ".$base_url."admin/all_product.php");
}





if(isset($_POST['update_product']))
{
	if($_POST['title'] != "" AND $_POST['price'] != "" AND $_POST['shot_description'] != "" AND $_POST['category'] !="" AND $_POST['description'] != ""  AND $_POST['scount'] != "" AND $_POST['stock'] != "")
	{
		$id  = mysqli_real_escape_string($con,$_GET['pid']);

		$title  = mysqli_real_escape_string($con,$_POST['title']);

		$price  = mysqli_real_escape_string($con,$_POST['price']);

		$shot_description  = mysqli_real_escape_string($con,$_POST['shot_description']);

		$description  = mysqli_real_escape_string($con,$_POST['description']);

		$category  = mysqli_real_escape_string($con,$_POST['category']);

		$scount  = mysqli_real_escape_string($con,$_POST['scount']);

		$stock  = mysqli_real_escape_string($con,$_POST['stock']);



  
    $ph1 = $_FILES['price1']['name'];
    $ph2 = $_FILES['price2']['name'];
    $ph3 = $_FILES['price3']['name'];
    $ph4 = $_FILES['price4']['name'];
    $ph5 = $_FILES['price5']['name'];
    $ph6 = $_FILES['price6']['name'];
    $ph7 = $_FILES['price7']['name'];
    $ph8 = $_FILES['price8']['name'];

    //file tamp names
    $t_ph1 = $_FILES['price1']['tmp_name'];
    $t_ph2 = $_FILES['price2']['tmp_name'];
    $t_ph3 = $_FILES['price3']['tmp_name'];
    $t_ph4 = $_FILES['price4']['tmp_name'];
    $t_ph5 = $_FILES['price5']['tmp_name'];
    $t_ph6 = $_FILES['price6']['tmp_name'];
    $t_ph7 = $_FILES['price7']['tmp_name'];
    $t_ph8 = $_FILES['price8']['tmp_name'];

    //upload directories with names
    $fd1 = '../uplodes/products/'.$ph1;
    $fd2 = '../uplodes/products/'.$ph2;
    $fd3 = '../uplodes/products/'.$ph3;
    $fd4 = '../uplodes/products/'.$ph4;
    $fd5 = '../uplodes/products/'.$ph5;
    $fd6 = '../uplodes/products/'.$ph6;
    $fd7 = '../uplodes/products/'.$ph7;
    $fd8 = '../uplodes/products/'.$ph8;

		
		$img1 = ''; $img2 = ''; $img3 = ''; $img4 = ''; $img5 = ''; $img6 = ''; $img7 = ''; $img8 = '';
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

      if($ph6 =="")
      {
        $img6 = $_POST['img6'];
      }
      else
      {
        $img6 = $ph6;
      }

      if($ph7 =="")
      {
        $img7 = $_POST['img7'];
      }
      else
      {
        $img7 = $ph7;
      }

      if($ph8 =="")
      {
        $img8 = $_POST['img8'];
      }
      else
      {
        $img8 = $ph8;
      }

    	    
		move_uploaded_file($t_ph1, $fd1); move_uploaded_file($t_ph2, $fd2);  move_uploaded_file($t_ph3, $fd3);  move_uploaded_file($t_ph4, $fd4); move_uploaded_file($t_ph5, $fd5); move_uploaded_file($t_ph6, $fd6); move_uploaded_file($t_ph7, $fd7); move_uploaded_file($t_ph8, $fd8);
			
		$insert_product = "UPDATE `product` SET `c_id` = '$category', `title` = '$title', `short_description` = '$shot_description', `description` = '$description', `price` = '$price', `img1` = '$img1', `img2` = '$img2', `img3` = '$img3', `img4` = '$img4', `img5` = '$img5', `img6` = '$img6', `img7` = '$img7', `img8` = '$img8', `stock` = '$stock', `scount` = '$scount' WHERE `id` = '$id'";
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



if (isset($_GET['alert'])) 
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}
?>