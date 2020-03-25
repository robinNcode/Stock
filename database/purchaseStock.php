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



if(isset($_POST['add'])){

	$conn->query("SELECT (purchase_quantity - sell_quantity) AS available_quantity FROM stockin");
	
	$p_date =	  $_POST['p_date'];
	$p_company =  $_POST['company'];
	$p_item =	  $_POST['item'];
	$p_quantity = $_POST['pq'];


	$conn->query("INSERT INTO stockin(p_date,p_company,p_item,purchase_quantity) VALUES('$p_date','$p_company','$p_item','$p_quantity')")or die("Connection failed: " . $conn->connect_error);


	$_SESSION['message']="Record has been Updated!";
	$_SESSION['msg_type']="warning";

	header("location: ../index.php?submit=purchase.php");
}

 ?>
