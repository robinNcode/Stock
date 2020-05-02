<?php
session_start(); 
include 'db_config.php';

    $update = false;
    $id = 0;
  
 if (isset($_POST['save']))
 {
	$category=$_POST['Category'];
	$company=$_POST['company'];
 	$item = $_POST['item'];
 	$level=$_POST['level'];


 	$conn->query("INSERT INTO item(item,company,category,level) VALUES('$item','$company','$category', '$level')")or die("Connection failed: " . $conn->connect_error);
 	echo "hello";
 	$_SESSION ['messege'] = "Information has been Saved!";
 	$_SESSION ['msg_type'] = "success";
 	header("location: ../index.php?submit=item_setup.php");

 }
 else if (isset($_GET['delete'])){

 	$id = $_GET['delete'];
 	
 	$conn->query("DELETE FROM item WHERE id=$id")or die("Deletion failed: " .$conn->connect_error);

 	$_SESSION ['messege'] = "Information has been removed!";
 	$_SESSION ['msg_type'] = "danger";
 	header("location: ../index.php?submit=item_setup.php");
 }

 ?>