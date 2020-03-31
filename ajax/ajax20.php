<?php 

    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);

    $sitem=$_GET['sitem'];

    $show = $conn->query("SELECT * FROM item WHERE id=$sitem");

     echo "Matha";
    while($mejaj=$show->fetch_assoc()){
    	echo $mejaj['level'];
    }


?>

