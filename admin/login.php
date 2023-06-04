<?php  include '../config.php'; ?>
<?php include 'operations/login_op.php'; ?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Winds Admin Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/sweetalert2.all.min.js"></script>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="text-center mb-3"><b>Admin Login</b></h2>
                                    
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                          <div class="form-group col-md-12">
                                              <label><strong>Email</strong></label>
                                              <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
                                          </div>
                                          
                                          <div class="form-group col-md-12">
                                              <label><strong>Password</strong></label>
                                              <input type="password" name="password" class="form-control" placeholder="Enter Password" required> 
                                          </div>  
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="signup" class="btn btn-primary btn-block">Login Admins</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	  <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>
<?php  

if (isset($_SESSION['alert'] )) 
{

      if (isset($_SESSION['redirect']))
      {
        $redirect = ".then(function() {window.location = \"".$_SESSION['redirect']."\";});";
      }
      else
      {
        $redirect = "";
      }


      if (isset($_SESSION['alert_text']))
      {
        $alert_text = $_SESSION['alert_text'];
      }
      else
      {
        $alert_text = "";
      }


    if ($_SESSION['alert']  == "success") 
    {

      echo "

      <script type=\"text/javascript\">
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '".$_SESSION['alert_message']."',
            html: '".$alert_text."',
            showConfirmButton: false,
            timer: 5500
          })".$redirect."
      </script>

      ";      
    }
    else
    {
      echo "

      <script type=\"text/javascript\">
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '".$_SESSION['alert_message']."',
            html: '".$alert_text."',           
            showConfirmButton: false,
            timer: 5500
          })".$redirect."
      </script>

      ";
    }
}

unset($_SESSION['alert']);
unset($_SESSION['alert_message']);
unset($_SESSION['alert_text']);
unset($_SESSION['redirect']);

?>