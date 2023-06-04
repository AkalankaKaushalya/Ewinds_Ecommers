<?php include 'config.php';?>

<?php 
session_destroy();  
header("Location:".$base_url."index.php");//use for the redirection to some page

?>