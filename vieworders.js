
//declare variables
var xhr, obj, table, text, parsejson;

//request data from vieworders.php file using ajax 
//and convert json data to Javascript object

funclon loadOrders(){
xhr= new XLMHttpRequest;
xhr.onload=function(){
obj= this.responseText;}
xhr.open( "GET", "vieworders.php", "true");
xhr.send();
}

//convert json array string data to Javascript object
parsejson= JSON.parse(obj);
table="<table>;
table+="<tr><th>Product Name</th><th><Product Quantity</th><th>Price</th><th>Value</th><th>Date</th></tr>";
for(1=0; 1< parsejson.length; 1++){
text=parsejson[i];
table+="<tr><td>text.name</td><td>text.quantity</td><td>text.price</td><td>text.value</td><td>text.date</td></td>";
table+="</table>"';
document.getElementById ("display"),innerHTML=table;


