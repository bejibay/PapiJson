Below is a complete solution to the PHP challenge
The solution does not invlude css 


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

>
<html>
<head><title>PRODUCTS DETAILS</title></head>

<body>

<script>
//declare variables
var xhr, obj, table, text, parsejson;

//request data from json text file using xhr ajax to convert json data to Javascript object

funclon loadproducts(){
 xhr= new XLMHttpRequest;
xhr.onreadystatechange=function(){
if(this.readyState== 4 && this.status==200){
obj= this.responseText;

xhr.open( "GET", "json.txt", "true");

xhr.send();
}
}

//convert json array string data to Javascript array object

parsejson= obj.parseJSON();
table="<table>;
table+="<tr><th>Product Name</th><th><Product Quantity</th><th>Price</th><th>Value</th><th>Date</th></tr>";

for(1=0; 1< parsejson.length; 1++){
text=parsejson[i];
table+="<tr><td>text.name</td><td>text.quantity</td><td>text.price</td><td>text.value</td><td>text.date</td></td>";
table+="</table>"';


document.getElementById ("display"),innerHTML=table;

</script>


<form method="post" action="$_SERVER['PHP_SELF']>
<label for="name"> Product Name</label>
<Input type="text" name="name" id="name">
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

<p id="display"></p>

</form>

<table>
<tr></tr>
<tr><th>Product Name</th><th>Quantity</th><th>Price</h><th>Value</h><th>Date</h></tr>
<tr><td id="mame"></td><td id="qty"></td><td id="price"></td id="value"><t/d><td id="date"></td></tr>
</table>

<div>
<button>
type-"button" onclick="loadCdetail" >Update Details</button>

</div>




</body>

</html>