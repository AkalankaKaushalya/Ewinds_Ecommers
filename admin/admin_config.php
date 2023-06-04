<?php 
if (isset($_SESSION['email'])) 
{
	$email = $_SESSION['email'];
    $check_verified = "SELECT * FROM `admin` WHERE `email`='$email'";
    $verify_res = mysqli_query($con, $check_verified);
    
    if ($verify_res) 
    {
        if(isset($_SESSION['role']) == "admin")
        {

        }
        else
        {
            header("Location: ".$base_url."admin/login.php?alert=error&alert_message=Your Can,t Login&alert_text= Got Back.");
        }
    }
    else
    {
        header("Location: ".$base_url."admin/login.php?alert=error&alert_message=Your Can,t Login&alert_text= Got Back.");
    }
}
else
{
     header("Location: ".$base_url."admin/login.php?alert=error&alert_message=Your Can,t Login&alert_text= Got Back.");
}
?>