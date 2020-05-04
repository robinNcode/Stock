<?php
include 'db_config.php';

    $update = false;
    $id = 0;
    $company ="";
    $representative="";
    $conum ="";
  
 if (isset($_POST['save'])){

 	$company = $_POST['company'];
 	$representative = $_POST['representative'];
 	$conum = $_POST['conum'];
 
 	$conn-> query("INSERT INTO company(company,representative,conum) VALUES('$company','$representative','$conum')")or die("Database Connection failed: " . $conn->connect_error);

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
 			$id=$row['id'];
 		 	$company = $row['company'];
 		 	$representative=$row['representative'];
 			$conum=$row['conum'];

 	}
 }
 else if (isset($_POST['update'])){

    $id = $_POST['id'];
 	$company = $_POST['company'];
 	$representative = $_POST['representative'];
 	$conum = $_POST['conum'];

 	$conn-> query("UPDATE company SET company ='$company', representative= '$representative', conum='$conum' WHERE id=$id")or die("Data base Connection failed: " . $conn->connect_error);

 	$_SESSION ['messege'] = "Information has been Updated!";
 	$_SESSION ['msg_type'] = "info";
 	header("location: ../index.php?submit=Company_setup.php");

 }

 ?>