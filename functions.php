
<?php
// set error variables to global variables
$GLOBALS['nameError'] =
$GLOBALS['quantityError'] =
$GLOBALS['priceError'] =
$GLOBALS['valueError'] =
$GLOBALS['dateError'] = "";

//function to validate input data

function testdata($data){
$data=trim($data);
$data=stripslashes($data);
$data=strip_tags($data);
return $data;
}
function productOrder{
// collect form fields data
// if firm data are saved for the first time

if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($name))$name=testinput($_POST['name']);
if(!empty($quantity)&& is_int($quantity))$quantity=testinput($_POST['quantity']);
if(!empty($price)&& is_int($price))$price=testinput($_POST['price']);
$value=$quantity*$price;
if(!empty($value)&& is_int($value))$value=testinput($_POST['value']);
if(!empty($orderdate))$orderdate=testinput($_POST['orderdate']);


//setting error level for form data
if(empty($name) && !preg_match("/^[A-Za-z""]*$/",$name)) $nameError ="invalid entry only 
digits and space allowed";
if(empty($quantity) && !is_int(quantity)) $quantityError ="invalid entry only numbers allowed";
if(empty($price) && !is_int($price)) $priceError ="invalid entry only numbers allowed";
if(empty($value) && !is_int($value)) $valueError ="invalid entry only numbers allowed";
if(empty($date)) $dateError ="invalid entry";

//declare an array to store each form post

//put form fields into array'

$formdata=array('name' =>$name, 'quantity'=>$quantity, 'price'=>$price, 'value'=>$value, 'orderdate'=>$orderdate);

//convert the array into json 
$jsondata=json_encode($formdata);

//save data into file
if(file_exists(product.text)){
file_put_contents("product.txt", $jsondata);
echo "data saved into text file";
}
}


// collect form fields data
// if additional data us saved into text file
if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($name))$name=testinput($_POST['name']);
if(!empty($quantity)&& is_int($quantity))$quantity=testinput($_POST['quantity']);
if(!empty($price)&& is_int($price))$price=testinput($_POST['price']);
$value=$quantity*$price;
if(!empty($value)&& is_int($value))$value=testinput($_POST['value']);
if(!empty($orderdate))$orderdate=testinput($_POST['orderdate']);


//setting error level for form data
if(empty($name) && !preg_match("/^[A-Za-z""]*$/",$name)) $nameError ="invalid entry only 
digits and space allowed";
if(empty($quantity) && !is_int(quantity)) $quantityError ="invalid entry only numbers allowed";
if(empty($price) && !is_int($price)) $priceError ="invalid entry only numbers allowed";
if(empty($value) && !is_int($value)) $valueError ="invalid entry only numbers allowed";
if(empty($date)) $dateError ="invalid entry";

//declare an array to retrieve data from text file
$data = array();

//put form fields into array'

$formdata=array('name' =>$name, 'quantity'=>$quantity, 'price'=>$price, 'value'=>$value, 'orderdate'=>$orderdate);


// retrieve data from text file
$jsondata=file_get_contents("product.txt");

//convert json into array
$jsondata=json_decode($jsondata,true);
$data[] = $jsondata;
$data[] = $formdata

//convert the array into json 

$jsondata=json_encode($data);

//save data into file
if(file_exists(product.text)){
file_put_contents("product.txt", $data);
echo "data saved into text file";
}
}
include "views/rderform.php";
}

function homepage(){
include "views/homepage.html"
}
?>












function homepage(){
include "views/homepage.html"
}
?>







