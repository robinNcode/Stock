<!doctype html>

<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
</head>
<body>
	<?php 
    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
    $show = $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);

  ?>

	<form method="POST" action="">
		Select item : 
		<select id="item_id" onchange="available()">
			<option> select option </option>
			<?php while ($row=$show->fetch_assoc()){
				  	?>
				 	 <option><?php echo $row['item']; } ?> </option>
			   
		</select>

		<br>
		<br>
		<br>
		<input type="text" id="avail_id" value="<?php  ?>" readonly/>
		
	</form>
    <script type="text/javascript">

    	function available() {
    		var avail = new XMLHttpRequest ();

    	avail.open("GET","ajax.php?item="+document.getElementById("item_id").value,false);
    	avail.send(null);
    	alert(avail.responseText);
    	document.getElementById("avail_id").innerHTML = avail.responseText;

    	}
    	 
    </script>
</body>
</html>