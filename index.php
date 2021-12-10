<!IDOCTYPE html>
<html>
<head>
<title>PHP store </title>
</head>
<body>
<?php
$name="PHP store"
$credit=1000;

// using two foward slashes we create comments in php.
// within the php tag,we can insert valuesinto our HTML.
echo"<hi>welcome to ".$name."!</hi>";
echo "<h2>you have $".$credit ."in your wallet.</h2>";
$products['computer']=750;
$products['car']=15000;
$products['iphone']=1000;
$products['toaster']=75;
foreach ($ products as $key=>$value){
echo "</p> The "$key."costs.".$value."</p>";
}
echo "<h2> Items you can afford</h2>";
foreach($products as $key=>$value){
if ($value<=$credit){
echo "<p>.$key."</p>"
}
}
echo "<p> A car costs$".$products[car']</p>;
function tax_calc($amount,$tax){
$calculate_tax=$amount*$tax;
$amount=round ($amount+$calculate-tax,2);
return $amount;
}
?>
$amount=800;
$taxRate=0.0825
$addedTax=$amount*$taxRate://amount=800,tax=.0825
echo $addedTax;
</body>
</html>
