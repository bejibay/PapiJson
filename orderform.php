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
<label for="orderdate"> Date</label>
<Input type="date" name="orderdate" id="orderdate">
<label for="submit"> Submit</label>
<Input type="text" name="submit" id="submit" value="ClicK to Update" onclick="function loadproducts() >

</form>
</body>
</html>


