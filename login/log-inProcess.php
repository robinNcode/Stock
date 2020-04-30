<?php 

 if (isset($_POST['save'])){
 	$username = $_POST['username'];
 	$pass = $_POST['pass'];

 	if ($username=="adovasoft@gmail.com" && $pass=="robin"){
 		echo "<script>
                   alert('Log in successful');
                </script>";
 		require '../index.php';
 	}
 	else {
 		echo "<script>
                   alert('Log in Unsuccessful Wrong Password or Wrong Usernmae');
                </script>";
        require 'index.php';
 	}
 }

?>