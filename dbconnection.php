<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "mydatabase";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
/*$sql = "CREATE TABLE customers (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully" . "\n";
} else {
   echo "Error creating table: " . mysqli_error($conn) . "\n";
}*/
/*$sql = "INSERT INTO customers (firstname, lastname, email)
VALUES ('Jamal', 'Ahmed', 'jamal@ahmed.com')";
if (mysqli_query($conn, $sql)) {
   echo "New record created.\n";
} else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}*/
$sql = "UPDATE customers SET lastname='mamut' WHERE user_id=5";
if ( mysqli_query($conn, $sql)){
	echo "you updated.....";
}

else{
	echo "update error for ".$sql."\n".mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>