<?php
$host 	= "localhost";
$username ="root";
$password ="";
$db_name="user";


// Create connection
$conn = new mysqli($host, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$myusername = $_POST['txtUser'];
$mypassword = $_POST['txtPass'];


$sql = "SELECT * FROM members WHERE Username ='$myusername' and pasword = '$mypassword'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	
header("location:loginsuccessfully.php");	
}
else{
	echo "wong username or password!!";
	}




$conn->close();

?>
