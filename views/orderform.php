<!DOCTYPE html>
<html>
<head><title>PRODUCT$ ORDER DETAILS</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="./order.css">
</head>
<body>
<h1>Product A</h1>
<h2>Place Your Order</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
<div>
<?php echo $nameError;?>
<?php echo $quantityError;?>
<?php echo $priceError;?>
<?php echo $valueError;?>
<?php echo $dateError;?>
</div>
<label for="customer">Customer Name</label>
<Input type="text" name="customer" id="name">
<label for="quantity"> Product Quantity</label>
<Input type="text" name="quantity" id="quantity">
<label for="price"> Price</label>
<Input type="text" name="price" id="price" value="50">
<label for="value"> Value</label>
<Input type="text" name="value" id="value" value="<?php echo $value;?>">
<label for="orderdate"> Date</label>
<Input type="date" name="orderdate" id="orderdate">
<label for="submit"> Submit</label>
<Input type="text" name="submit" id="submit" value="ClicK to Order" >

</form>
</body>
</html>


