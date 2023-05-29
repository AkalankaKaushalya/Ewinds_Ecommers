<?php 

$category_qry="SELECT * FROM `category` ";
$category_result=mysqli_query($con ,$category_qry);
$loade_category ='';
while ($category_row=mysqli_fetch_array($category_result)) 
{
	
	$loade_category .= '<option value="'.$category_row['id'].'">'.$category_row['name'].'</option>';
}


if(isset($_POST['add_product']))
{
	if($_POST['title'] !="" AND $_POST['price'] !="" AND $_POST['shot_description'] !="" AND $_POST['description'] !="" AND $_POST['category'] !="" AND $_POST['scount'] !="" AND $_POST['stock'] !="")
	{
		$title  = mysqli_real_escape_string($con,$_POST['title']);
		$price  = mysqli_real_escape_string($con,$_POST['price']);
		$shot_description  = mysqli_real_escape_string($con,$_POST['shot_description']);
		$description  = mysqli_real_escape_string($con,$_POST['description']);
		$category  = mysqli_real_escape_string($con,$_POST['category']);
		$scount  = mysqli_real_escape_string($con,$_POST['scount']);
		$stock  = mysqli_real_escape_string($con,$_POST['stock']);

		$ph1 = $_FILES['price1']['name'];
		$phz1 = $_FILES['price1']['size'];
		$t_ph1 = $_FILES['price1']['tmp_name'];
		$fd1 = '../uplodes/products/'.$ph1;

		$ph2 = $_FILES['price2']['name'] ?? NULL;
		$phz2 = $_FILES['price2']['size'];
		$t_ph2 = $_FILES['price2']['tmp_name'];
		$fd2 = '../uplodes/products/'.$ph2;

		$ph3 = $_FILES['price3']['name'] ?? NULL;
		$phz3 = $_FILES['price3']['size'];
		$t_ph3 = $_FILES['price3']['tmp_name'];
		$fd3 = '../uplodes/products/'.$ph3;

		$ph4 = $_FILES['price4']['name'] ?? NULL;
		$phz4 = $_FILES['price4']['size'];
		$t_ph4 = $_FILES['price4']['tmp_name'];
		$fd4 = '../uplodes/products/'.$ph4;

		$ph5 = $_FILES['price5']['name'] ?? NULL;
		$phz5 = $_FILES['price5']['size'];
		$t_ph5 = $_FILES['price5']['tmp_name'];
		$fd5 = '../uplodes/products/'.$ph5;

		if (move_uploaded_file($t_ph1, $fd1))
		{	
			move_uploaded_file($t_ph2, $fd2); move_uploaded_file($t_ph3, $fd3); move_uploaded_file($t_ph4, $fd4); move_uploaded_file($t_ph5, $fd5);
			$insert_product = "INSERT INTO product (`c_id`, `title`, `short_description`, `description`, `price`, `img1`, `img2`, `img3`, `img4`, `img5`, `stock`, `scount`, `status`) VALUES ('$category', '$title', '$shot_description', '$description', '$price', '$ph1', '$ph2', '$ph3', '$ph4', '$ph5', '$stock', '$scount', '1')";
			if(mysqli_query($con, $insert_product))
			{
				header("Location: ".$base_url."admin/add_product.php?alert=success&alert_message=Add Product Successful&alert_text= Done.");
			}
			else
			{
				header("Location: ".$base_url."admin/add_product.php?alert=error&alert_message=Add Product Faild&alert_text= Faild.");
			}

		}
		else
		{
			header("Location: ".$base_url."admin/add_product.php?alert=error&alert_message=Product Image Uplode Faild&alert_text= Faild.");
		}
	}
	else
	{
		header("Location: ".$base_url."admin/add_product.php?alert=error&alert_message=Product details Are empty Faild&alert_text= Faild.");
	} 
}
?>