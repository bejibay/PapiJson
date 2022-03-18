<?php include "functions.php";?>
<?php 
$action = $_GET['action'];
if($action == 'views'){
productViews();}
else{ homepage();}

?>
