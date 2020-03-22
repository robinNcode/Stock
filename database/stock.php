<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $update = false;
    $id = 0;
  

if(isset($_POST['sell'])){
	
	$date=$_POST['date'];
	$s_company=$_POST['company'];
	$s_item=$_POST['item'];
	$available=$_POST['available'];
	$sell_quantity=$_POST['sell_quantity'];

	$available=$available - $sell_quantity;

	$conn->query("INSERT INTO stock(date,s_company,s_item,sell_quantity) VALUES('$date','$s_company','$s_item','$sell_quantity')")or die("Connection failed: " . $conn->connect_error);
	$_SESSION['message']="Record has been Updated!";
	$_SESSION['msg_type']="warning";

	header("location: ../index.php?submit=sell.php");
}

 ?>