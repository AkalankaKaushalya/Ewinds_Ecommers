<?php 

$all_transation = '';
$select_transation = "SELECT * FROM `payments`";
$res = mysqli_query($con, $select_transation);
$all_transation = "";
while ($row = mysqli_fetch_assoc($res)) 
{
	
	if($row['payment_status'] == "Completed")
	{
			
		$status = '<span class="badge badge-rounded badge-success">'.$row['payment_status'].'</span>';
	}
	else
	{
		$status = '<span class="badge badge-rounded badge-warning">'.$row['payment_status'].'</span>';
	}
  $product_qry="SELECT * FROM `product` WHERE id = '".$row['item_number']."' ";
  $product_result=mysqli_query($con,$product_qry);
  $product_row=mysqli_fetch_array($product_result);
   
	$all_transation .= '

				<tr class="btn-reveal-trigger">

       	      		<td class="py-2">'.$row['txn_id'].'</td>
       	      		<td class="py-2"><a href="'.$base_url.'admin/oders.php#'.$row['odear_id'].'">'.$row['odear_id'].'</a></td>
       	      		<td class="py-2">'.$product_row['title'].'</td>
       	      		<td class="py-2">'.$row['payment_gross'].'</td>
       	      		<td class="py-2">'.$row['date'].'</td>
       	      		<td class="py-2">'.$status.'</td>
       	    	</tr>

       	    	';
}

if (isset($_GET['alert'])) 
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}
?>