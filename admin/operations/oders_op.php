<?php 


$all_odears = '';
$select_odears = "SELECT * FROM `odears`";
$res = mysqli_query($con, $select_odears);
$all_odears = "";
while ($row = mysqli_fetch_assoc($res)) 
{
	
	if($row['status'] == "0")
	{
		$status = '<span class="badge badge-rounded badge-warning">Pending Order</span>';
		
	}
	else if ($row['status'] == "1")
	{
		$status = '<span class="badge badge-rounded badge-success">New Order</span>';
	}
	else if ($row['status'] == "2")
	{
		$status = '<span class="badge badge-rounded badge-info">Order Sent for delivery</span>';
	}
	else
	{
		$status = '<span class="badge badge-rounded badge-danger">Order is Return or Not responding</span>';
	}
  $product_qry="SELECT * FROM `product` WHERE id = '".$row['p_id']."' ";
  $product_result=mysqli_query($con,$product_qry);
  $product_row=mysqli_fetch_array($product_result);

  $transation_qry="SELECT * FROM `payments` WHERE odear_id = '".$row['odear_id']."' ";
  $transation_result=mysqli_query($con,$transation_qry);
  $transation_row=mysqli_fetch_array($transation_result);

	$all_odears .= '

				<tr class="btn-reveal-trigger" id="#'.$row['odear_id'].'">

       	      		<td class="py-2">'.$row['odear_id'].'</td>
       	      		<td class="py-2">'.$product_row['title'].'</td>
       	      		<td class="py-2">'.$row['p_quantity'].'</td>
       	      		<td class="py-2">'.$transation_row['payment_gross'].'</td>
       	      		<td class="py-2">'.$row['address'].'</td>
       	      		<td class="py-2">'.$row['email'].'</td>
       	      		<td class="py-2">'.$row['date'].'</td>
       	      		<td class="py-2">'.$status.'</td>

       	      		<td>
       	        		<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_odears_modal'.$row['id'].'"><i class="fa-solid fa-trash"></i></a>
       	        		<a href="javascript:void(0);" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#view_odears_modal'.$row['id'].'"><i class="fa-solid fa-pen"></i></a>
       	    		</td>


       	    		<div id="delete_odears_modal'.$row['id'].'" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                   <div class="modal-content p-2">
                                          <div class="modal-header">
                                          <a class="btn btn-default" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i></a>
                                          <h4 class="modal-title"><h5>This is Order ID '.$row['id'].'</h5></h4>
                                          </div>
                                          <div class="modal-body">
                                                 <form id="order_'.$row['id'].'" class="forms-sample" action="" method="POST">
                                                        <div class="form">
                                                               <input type="hidden" form="order_'.$row['id'].'" name="oid" value="'.$row['odear_id'].'">
                                                               
                                                               <lable>Are You Shuwar Delete To This Order  <b>'.$row['odear_id'].'</lable><br>

                                                               <button class="btn-lg btn-danger mt-8" type="submit" name="delete_order" form="order_'.$row['id'].'" > Delete Order </button>
                                                        </div> <!--   form div end -->
                                                 </form> <!-- form end -->
                                          </div> <!-- modal-body -->
                                   </div> <!-- modal-content p-2 end -->
                            </div> <!-- modal-dialog modal-lg end -->
                    </div>

                    <div id="view_odears_modal'.$row['id'].'" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                   <div class="modal-content p-2">
                                          <div class="modal-header">
                                          <a class="btn btn-default" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i></a>
                                          <h4 class="modal-title"><h5>This is Order ID '.$row['id'].'</h5></h4>
                                          </div>
                                          <div class="modal-body">
                                                 <form id="order_update_'.$row['id'].'" class="forms-sample" action="" method="POST">
                                                        <div class="form">
                                                        	   <input type="hidden" form="order_update_'.$row['id'].'" name="id" value="'.$row['id'].'">
                                                               <input type="hidden" form="order_update_'.$row['id'].'" name="oid" value="'.$row['odear_id'].'">
                                                               
                                                                <div class="row">
    															  <div class="col-md-6">
    															    <label>First Name</label>
    															    <input type="text" class="form-control" name="fname" value="'.$row['fname'].'">
    															  </div>
    															  <div class="col-md-6">
    															    <label>Last Name</label>
    															    <input type="text" class="form-control" name="lname" value="'.$row['lname'].'">
    															  </div>
    															</div>

    															<div class="row">
    															  <div class="col-md-12 mt-2">
    															    <label>Delivery address</label>
    															    <input type="text" class="form-control" name="address" value="'.$row['address'].'">
    															  </div>
    															  <div class="col-md-12 mt-2">
    															    <label>email address</label>
    															    <input type="text" class="form-control" name="email" value="'.$row['email'].'">
    															  </div>


    															  <div class="col-md-4 mt-2">
    															    <label>Country</label>
    															    <input type="text" class="form-control" name="country" value="'.$row['country'].'">
    															  </div>

    															  <div class="col-md-4 mt-2">
    															    <label>City</label>
    															    <input type="text" class="form-control" name="city" value="'.$row['city'].'">
    															  </div>

    															   <div class="col-md-4 mt-2">
    															    <label>Zip code</label>
    															    <input type="text" class="form-control" name="zipcode" value="'.$row['zip_code'].'">
    															  </div>

    															  <div class="col-md-6 mt-2">
    															    <label>Mobile</label>
    															    <input type="text" class="form-control" name="mobile" value="'.$row['phone'].'">
    															  </div>

    															  <div class="col-md-6 mt-2">
    															    <label>Date</label>
    															    <input type="text" class="form-control" name="date" value="'.$row['date'].'">
    															  </div>

    															  <div class="col-md-6 mt-2">
    															    <label>Transaction ID</label>
    															    <input type="text" class="form-control" name="txn_id" value="'.$transation_row['txn_id'].'">
    															  </div>

    															  <div class="col-md-6 mt-2">
    															    <label>Order ID</label>
    															    <input type="text" class="form-control" name="odear_id" value="'.$row['odear_id'].'">
    															  </div>
    															</div>


    															<div class="row">
    															<h3 class="mt-2 text-info">Product Details</h3>
    															  <div class="col-md-12 mt-2">
    															    <label>Product Name</label>
    															    <input type="text" class="form-control" name="ptitle" value="'.$product_row['title'].'">
    															  </div>

    															  <div class="col-md-6 mt-2">
    															    <label>Quantity</label>
    															    <input type="text" class="form-control" name="quntity" value="'.$row['p_quantity'].'">
    															  </div>

    															  <div class="col-md-6 mt-2">
    															    <label>Amount</label>
    															    <input type="text" class="form-control" name="price" value="'.$transation_row['payment_gross'].'">
    															  </div>
    															</div>

                                                               <button class="btn-lg btn-info mt-2" type="submit" name="delivery_oder" form="order_update_'.$row['id'].'" > Delivery this Order </button>

                                                               <button class="btn-lg btn-danger mt-2" type="submit" name="rerun_oder" form="order_update_'.$row['id'].'" > Return Order </button>
                                                        </div> <!--   form div end -->
                                                 </form> <!-- form end -->
                                          </div> <!-- modal-body -->
                                   </div> <!-- modal-content p-2 end -->
                            </div> <!-- modal-dialog modal-lg end -->
                    </div>
       	    	</tr>

       	    	';
}


if(isset($_POST['delete_order']))
{
	$oid = $_POST['odear_id'];

	$delete_transation = "DELETE FROM payments WHERE odear_id = '$oid'";
	if(mysqli_query($con, $delete_transation))
	{
		$delete_order = "DELETE FROM odears WHERE odear_id = '$oid'";
		if(mysqli_query($con, $delete_transation))
		{
			header("Location: ".$base_url."admin/oders.php?alert=success&alert_message=Delete Order Successful&alert_text= Done.");
		}
		else
		{
			header("Location: ".$base_url."admin/oders.php?alert=error&alert_message=Delete Order Faild&alert_text= Faild.");
		}
	}
	else
	{
		header("Location: ".$base_url."admin/oders.php?alert=error&alert_message=Delete Order Faild&alert_text= Faild.");
	}
}


if(isset($_POST['delivery_oder']))
{
	$oid = $_POST['id'];

	$delevary_transation = "UPDATE odears SET status = '2' WHERE id = '$oid'";
	if(mysqli_query($con, $delevary_transation))
	{
		
		header("Location: ".$base_url."admin/oders.php?alert=success&alert_message=Order is Delivery Successful&alert_text= Done.");
	}
	else
	{
		header("Location: ".$base_url."admin/oders.php?alert=error&alert_message=Order  Delivery Faild&alert_text= Faild.");
	}
}


if(isset($_POST['rerun_oder']))
{
	$oid = $_POST['id'];

	$delevary_transation = "UPDATE odears SET status = '3' WHERE id = '$oid'";
	if(mysqli_query($con, $delevary_transation))
	{
		
		header("Location: ".$base_url."admin/oders.php?alert=success&alert_message=Order Rerun Successful&alert_text= Done.");
	}
	else
	{
		header("Location: ".$base_url."admin/oders.php?alert=error&alert_message=Order Rerun Faild&alert_text= Faild.");
	}
}



if (isset($_GET['alert'])) 
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}
?>