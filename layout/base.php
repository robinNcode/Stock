<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
      <title>Stock Management System</title>

      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css")?>">

   </head>
	
   <body class>
		<?php
			$this->load->view('layout/header');
		?>

		<?php
			$this->load->view($view_path);
		?>

		<?php
			$this->load->view('layout/footer');
		?>

		<script type="text/javascript" src="<?php echo base_url("Assets/js/jquery-3.4.1.min.js")?>"></script>
		<script type="text/javascript" src="<?php echo base_url("Assets/js/bootstrap.min.js")?>"></script>
	</body>
</html>

