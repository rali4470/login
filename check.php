<?php
$host 	= 	"localhost";
$username = 	"root";
$password =	"";
$db_name=	"user";
$tbl_name= "members";

mysql_connect("$host","$username","$password") or die ("cannot connect");
mysql_select_db("$db_name")or die ("cannot select database");

$myusername = $_POST['txtUser'];
$mypassword = $_POST['txtPass'];

$sql="SELECT * FROM $tbl_name WHERE Username ='$myusername' and pasword = '$mypassword'";
$result= mysql_query($sql);

$count =mysql_num_rows($result);

if($count==1){
	
header("location:loginsuccessfully.php");	
}
else{
	echo "wong username or password!!";
	}






?>