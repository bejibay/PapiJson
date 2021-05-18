
<?php
// collect form fields data

if($_SERVER['REQUEST_METHOD']=='POST'){
$name=trim(strip_tags("$_POST['name']));
$quantity=trim(strip_tags("$_POST['quantity']));
$price=trim(strip_tags("$_POST['price']));
$value=trim(strip_tags("$_POST['value']));
$date=time();
$value=$quantity*$price;
$submit=trim(strip-tags($_POST['submit']));


//put form fields into array'
$formdata=array('pname' =>$name, 'pquantity'=>$quantity, 'pprice'=>$price, 'pvalue'=>$value, 'pdate'=>$date);

//convert the array into json 
$jsondata=json_encode($formdata);
file_put_contents("json.txt", $jsondata);

// retreive data from text file
$arraydata=file_get_contents("json.txt");

//convert json into array
$newarraydata=json_decode($arraydata);

// append new form data 
$newraaraydata[]=$formdata;
file_put_contents($newarraydata);
}

?>
<html>
<head><title>PRODUCT A ORDER DETAILS</title>
</head>
<body>
<h1>Product A</h1>
<h2>Place Your Order</h2>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>"
<label for="customer">Customer Name</label>
<Input type="text" name="customer" id="name">
<label for="quantity"> Product Quantity</label>
<Input type="text" name="quantity" id="quantity">
<label for="price"> Price</label>
<Input type="text" name="price" id="price">
<label for="value"> Value</label>
<Input type="text" name="value" id="value">
<label for="date"> Date</label>
<Input type="text" name="date" id="date">
<label for="submit"> Submit</label>
<Input type="text" name="submit" id="submit" value="ClicK to Update" onclick="function loadproducts() >

</form>
</body>
</html>












