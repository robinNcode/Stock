<?php 

    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);

    echo "Gorar DIMmMMMM";

       $item=$_GET['item'];

    $show = $conn->query("SELECT * FROM item WHERE id=$item");


    while($mejaj=$show->fetch_assoc()){
    	echo $mejaj['level'];
    }



?>