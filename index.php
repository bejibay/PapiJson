<?php
// collect form fields data
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=testinput($_POST['name']);
$quantity=testinput($_POST['quantity']);
$price=testinput($_POST['price']);
$value=$quantity*$price;
$value=testinput($_POST['value']);
$orderdate=testinput($_POST['orderdate']);
$submit=$_POST['submit'];
//put form fields into array'
$formdata=array('name' =>$name, 'quantity'=>$quantity, 'price'=>$price, 'value'=>$value, 'orderdate'=>$orderdate);

//convert the array into json 
$jsondata=json_encode($formdata);
file_put_contents("product.txt", $jsondata);

// retrieve data from text file
$jsondata=file_get_contents("product.txt");

//convert json into array
$jsondata=json_decode($jsondata,true);

// create an array and make json data as an element
$newformdata[]=$jsondata;
$newformdata[]=$formdata;

// save the new form data into the product.text file as
// a string

file_put_contents(products.txt,json_decode($newformdata));

// get the content out of the file for output
json_decode(file_get_contents("product.txt"));
}
// function to validate input data
function testdata($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
include "orderform.php";
?>







