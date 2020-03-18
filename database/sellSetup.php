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

 	$table=$_POST['table'];

 	$sell = $_POST['sell'];
 
 	$conn-> query("INSERT INTO $table(item, company, quantity, reorder, sell_quantity) VALUES('$sell')")or die("Connection failed: " . $conn->connect_error);

 	$_SESSION ['messege'] = "Information has been Saved!";
 	$_SESSION ['msg_type'] = "success";
 	header("location: ../index.php?submit=sell_setup.php");

 }
 else if (isset($_GET['delete'])){

 	$table=$_POST['table']
 	$id = $_GET['delete'];
 	
 	$conn->query("DELETE FROM sell WHERE id=$id")or die("Deletion failed: " .$conn->connect_error);

 	$_SESSION ['messege'] = "Information has been removed!";
 	$_SESSION ['msg_type'] = "danger";
 	header("location: ../index.php?submit=sell_setup.php");
 }
 else if(isset($_GET['edit'])){

	$roll_no=$_GET['edit'];
	$update = true;

	$result = $conn->query("SELECT * FROM stud WHERE roll_no=$roll_no") or die($conn->error());


	while($row = $result->fetch_assoc()){
		$edit_roll_no=$row['roll_no'];
		$edit_name=$row['name'];
		$edit_email=$row['email'];
	}

}

else if(isset($_GET['update'])){
	$roll_no=$_GET['roll_no'];
	$name=$_GET['name'];
	$email=$_GET['email'];

	$conn->query("UPDATE stud SET name='$name', email='$email' WHERE roll_no=$roll_no") or die($conn->error());
	$_SESSION['message']="Record has been Updated!";
	$_SESSION['msg_type']="warning";
}

 ?>