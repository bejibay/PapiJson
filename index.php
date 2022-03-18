<?php include "functions.php";?>
<?php 
$action = $_GET['action'];
if($action == 'order'){
productOrder();}
else{ homepage();}

?>
