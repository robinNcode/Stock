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
    $company ="";
    $representative="";
    $conum ="";
  
 if (isset($_POST['save'])){

 	$company = $_POST['company'];
 	$representative = $_POST['representative'];
 	$conum = $_POST['conum'];
 
 	$conn-> query("INSERT INTO company(company,representative,conum) VALUES('$company','$representative','$conum')")or die("Connection failed: " . $conn->connect_error);

 	$_SESSION ['messege'] = "Information has been Saved!";
 	$_SESSION ['msg_type'] = "success";
 	header("location: ../index.php?submit=company_setup.php");

 }
 else if (isset($_GET['delete'])){

 	$id = $_GET['delete'];
 	
 	$conn->query("DELETE FROM company WHERE id=$id")or die("Deletion failed: " .$conn->connect_error);

 	$_SESSION ['messege'] = "Information has been removed!";
 	$_SESSION ['msg_type'] = "danger";
 	header("location: ../index.php?submit=company_setup.php");
 }

 else if (isset($_GET['edit'])){

 	$id =$_GET['edit'];
 	$update = true;
 	$result = $conn->query("SELECT * FROM company WHERE id =$id") or die ("Failed ". $conn->error);
 	while($row=$result->fetch_assoc()){
 		
 		 	$company = $row['company'];
 	}
 }
 else if (isset($_POST['update'])){

    $id=$_POST['id'];
 	$company = $_POST['company'];
 	$representative=$_POST['representative'];
 	$conum=$_POST['conum'];

 	$conn-> query("UPDATE company SET company ='$company' WHERE id=$id")or die("Connection failed: " . $conn->connect_error);

 	$_SESSION ['messege'] = "Information has been Updated!";
 	$_SESSION ['msg_type'] = "info";
 	header("location: ../index.php?submit=Company_setup.php");

 }

 ?>