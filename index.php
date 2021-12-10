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
echo "<p> A car costs$".$products[car']</p>
?>
</body>
</html>
