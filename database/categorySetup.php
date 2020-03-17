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
  
 if (isset($_POST['save'])){

 	$category = $_POST['category'];
 
 	$conn-> query("INSERT INTO category(Category) VALUES('$category')")or die("Connection failed: " . $conn->connect_error);

 	$_SESSION ['messege'] = "Information has been Saved!";
 	$_SESSION ['msg_type'] = "success";
 	header("location: ../index.php?submit=category_setup.php");

 }
 else if (isset($_GET['delete'])){

 	$id = $_GET['delete'];
 	
 	$conn->query("DELETE FROM category WHERE id=$id")or die("Deletion failed: " .$conn->connect_error);

 	$_SESSION ['messege'] = "Information has been removed!";
 	$_SESSION ['msg_type'] = "danger";
 	//header("location: ../category_setup.php");
 }

 ?>