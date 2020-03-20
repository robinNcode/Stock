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
	$company=$_POST['company'];
	$item=$_POST['item'];
	$available=$_POST['available'];
	$available=$_POST['available'];
	$sell_quantity=$_POST['sell_quantity'];

	$available=$available-$sell_quantity;

	//$conn->query("UPDATE stock SET available='$available' WHERE item=$item, company=$company") or die($conn->error());
	$conn->query("INSERT INTO sell(date,item,sell_quantity) VALUES('$date','$item','$sell_quantity')")or die("Connection failed: " . $conn->connect_error);
	$_SESSION['message']="Record has been Updated!";
	$_SESSION['msg_type']="warning";
}

 ?>