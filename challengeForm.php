<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="MajdJamal";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

// insert data into MySqlAdmin
$id=$_POST["id"];
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);

$email = mysqli_real_escape_string($conn, $_POST['email']);
$phonenumber= mysqli_real_escape_string($conn, $_POST['phone_number']);
$Driving_license_No = mysqli_real_escape_string($conn, $_POST['driving_license_Number']);
$driving_licence_issue = mysqli_real_escape_string($conn, $_POST['driving_license_issue']);
// attempt insert query execution
$sql = "INSERT INTO username (id,first_name, last_name, email,phone_Number,driving_license_Number,driving_license_issue) VALUES ($id,'$first_name', '$last_name', '$email',$phonenumber,$Driving_license_No,$driving_licence_issue)";
if (mysqli_query($conn, $sql)) {
   echo "<h1>New record created.<h1>";
} else {
   echo "<h1>Record creation error for: </h1>" . 
         "<p>" . $sql . "</p>" . 
         mysqli_error($conn);
}
mysqli_close($conn);
?>
