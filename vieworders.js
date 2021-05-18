
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


