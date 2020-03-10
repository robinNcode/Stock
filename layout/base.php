<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
      <title><?= $page_title ?></title>

      <link rel="stylesheet" type="text/css" href="<?php echo base_url("Assets/css/bootstrap.min.css")?>">

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

