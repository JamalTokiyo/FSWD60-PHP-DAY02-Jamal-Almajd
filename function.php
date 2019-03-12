<!DOCTYPE html>
<html>
<head>
	<title>Function exercise</title>
</head>
<body>
<?php 
function myfuction( $num1,$num2){
	$division=$num1/$num2;
	return $division;
}
$result=myfuction(300,3);
echo "The result is:".$result;


 ?>
</body>
</html>