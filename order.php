
<?php
// collect form fields data

if($_SERVER['REQUEST_METHOD']=='POST'){
$name=testinput($_POST['name']);
$quantity=testinput($_POST['quantity']);
$price=testinput($_POST['price']);
$value=$quantity*$price;
$value=testinput($_POST['value']);
$orderdate=testinput($_POST['orderdate']);
$submit=$_POST['submit']);
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
$newformdata[]=$formdata:

// save the new form data into the product.text file as
// a string

file_put_contents(json_decode($newformdata));

// get the content out of the file for output
json_decode(file_get_contents("product.text")):
}
// function to validate input data
function testdata($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;

}

?>
<html>
<head><title>PRODUCT A ORDER DETAILS</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="orderproduct.css">
</head>
<body>
<h1>Product A</h1>
<h2>Place Your Order</h2>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>"
<label for="customer">Customer Name</label>
<Input type="text" name="customer" id="name">
<label for="quantity"> Product Quantity</label>
<Input type="text" name="quantity" id="quantity">
<label for="price"> Price</label>
<Input type="text" name="price" id="price">
<label for="value"> Value</label>
<Input type="text" name="value" id="value" value="<?php echo $value;?>">
<label for="date"> Date</label>
<Input type="date" name="orderdate" id="date">
<label for="submit"> Submit</label>
<Input type="text" name="submit" id="submit" value="ClicK to Update" onclick="function loadproducts() >

</form>
</body>
</html>












