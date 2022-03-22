<?php include "functions.php";
$action = isset($_GET['action']);
if($action == 'order'){
productOrder();}
else{homepage();}
?>
