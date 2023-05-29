<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">Eprogrammers (Pvt) Ltd</a> 2023</p>
    </div>
</div>

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