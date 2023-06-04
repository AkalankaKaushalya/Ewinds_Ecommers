<?php 


if(isset($_POST['add_category']))
{
	if ($_POST['name'] != "")
	{

		$name  = mysqli_real_escape_string($con,$_POST['name']);

		$qur = "INSERT INTO `category` (`name`, `status`) VALUES ('$name', '1')";
		if (mysqli_query($con, $qur))
		{
			header("Location: ".$base_url."admin/category.php?alert=success&alert_message=Add Category Successful&alert_text= Done.");
		}
		else
		{
			header("Location: ".$base_url."admin/category.php?alert=error&alert_message=Add Student Faild&alert_text= Faild.");
		}
	}
	else
	{
		header("Location: ".$base_url."admin/category.php?alert=error&alert_message=Name Empty&alert_text= Faild.");
	}
}

$select_catecory = "SELECT * FROM `category`";
$res = mysqli_query($con, $select_catecory);
$category = "";
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
	$category = '

				<tr class="btn-reveal-trigger">
       	      		<td class="py-2">'.$row['id'].'</td>
       	      		<td class="py-2">'.$row['name'].'</td>
       	      		<td class="py-2">'.$status.'</td>

       	      		<td>
       	        		<a href="javascript:void(0);" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#view_category_modal'.$row['id'].'"><i class="fa-solid fa-trash"></i></a>
       	    		</td>

                    <div id="view_category_modal'.$row['id'].'" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                   <div class="modal-content p-2">
                                          <div class="modal-header">
                                          <a class="btn btn-default" data-dismiss="modal"><i class="menu-icon mdi mdi-close"></i></a>
                                          <h4 class="modal-title"><h5>This is Category ID '.$row['id'].'</h5></h4>
                                          </div>
                                          <div class="modal-body">
                                                 <form id="category_'.$row['id'].'" class="forms-sample" action="" method="POST">
                                                        <div class="form">
                                                               <input type="hidden" form="category_'.$row['id'].'" name="id" value="'.$row['id'].'">
                                                               
                                                               <lable>Are You Shuwar Delete To This Category  <b>'.$row['name'].'</lable><br>

                                                               <button class="btn-lg btn-danger mt-8" type="submit" name="delete_category" form="category_'.$row['id'].'" > Delete Category </button>
                                                        </div> <!--   form div end -->
                                                 </form> <!-- form end -->
                                          </div> <!-- modal-body -->
                                   </div> <!-- modal-content p-2 end -->
                            </div> <!-- modal-dialog modal-lg end -->
                    </div> 	
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