<?php
// set error variables to global variables
$GLOBAL['nameError'];
$GLOBAL['quantityError'];
$GLOBAL['priceError'];
$GLOBAL['valueError'];
$GLOBAL['dateError'];

//function to validate input data

function testdata($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

// collect form fields data
if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($name))$name=testinput($_POST['name']);
if(!empty($quantity)&&(is_int($quantity))$quantity=testinput($_POST['quantity']);
if(!empty($price)&&(is_int($price))$price=testinput($_POST['price']);
$value=$quantity*$price;
if(!empty($value)&&(is_int($value))$value=testinput($_POST['value']);
if(!empty($orderdate))$orderdate=testinput($_POST['orderdate']);
$submit=$_POST['submit'];

//setting error level for form data
if(empty($name)) $nameError ="invalid entry";
if(empty($quantity)||!is_int(quantity)) $quantityError ="invalid entry";
if(empty($price)||!is_int($price)) $priceError ="invalid entry";
if(empty($value)||!is_int($value)) $valueError ="invalid entry";
if(empty($date)) $dateError ="invalid entry";

//declare an array to store each form post
$data = array();

//put form fields into array'

$formdata=array('name' =>$name, 'quantity'=>$quantity, 'price'=>$price, 'value'=>$value, 'orderdate'=>$orderdate);

$data = array_push($data,$formdata);

//convert the array into json 
$jsondata=json_encode($data);

//save data into file
file_put_contents("product.txt", $jsondata);

// retrieve data from text file
$jsondata=file_get_contents("product.txt");

//convert json into array
$jsondata=json_decode($jsondata,true);

}

include "orderform.php";
?>







