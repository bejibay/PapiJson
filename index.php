<?php include "functions.php";
$action = $_GET['action'];
if($action == 'order'){
productOrder();}
else{ homepage();}
?>
