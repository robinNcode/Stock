<?php 

 if (isset($_POST['save'])){
 	$username = $_POST['username'];
 	$pass = $_POST['pass'];

 	if ($username=="adovasoft@gmail.com" && $pass=="robin"){
 		include 'index.php';
 	}
 	else echo "Muri Khaa";
 }

?>