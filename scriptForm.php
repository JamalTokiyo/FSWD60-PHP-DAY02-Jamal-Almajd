<html>
<head>
       <title>PHP form example: POST</title>
</head>
<body>
 <form action="scriptForm.php" method="POST">
Name: <input type="text" name="name"  required="required" />
Surname: <input type="text" name="surname" required="required" />
<input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
if( $_POST["name"] || $_POST["surname"] )
{
echo "Welcome ". $_POST['name'].' '.$_POST['surname']. "<br />";

}
} 
?>
</body>
</html>