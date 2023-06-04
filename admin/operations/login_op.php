<?php

if(!isset($_SESSION['email']))
{
   if(isset($_POST['signup']))
   {
      if(isset($_POST['email']))
      {
         $email = mysqli_real_escape_string($con, $_POST['email']);
         $password = mysqli_real_escape_string($con, $_POST['password']);
         $pass = md5($password);
   
         $select = " SELECT * FROM admin WHERE email = '$email' AND  password = '$pass' ";
         $result = mysqli_query($con, $select);
         
         if(mysqli_num_rows($result) > 0)
         {
            $row = mysqli_fetch_array($result);
            $_SESSION['user_data'] = $row;
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['id'] = $row['id'];
            header("Location: ".$base_url."admin/index.php"); 
         }
         else
         {
            header("Location: ".$base_url."admin/login.php?alert=error&alert_message=Your Can,t Login&alert_text= Got Back.");
         }
      }
   }
}
else
{
   header("Location: ".$base_url."admin/index.php");
}




if (isset($_GET['alert'])) 
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}

?>