<?php 

    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);

    $level=$_GET['level'];

    $show = $conn->query("SELECT * FROM item WHERE id=$level");
    //$conn->query("DELETE FROM company WHERE id=$id")or die("Deletion failed: " .$conn->connect_error);


    while($row=$show->fetch_assoc()){
    	echo $row['level'];
    }


?>

