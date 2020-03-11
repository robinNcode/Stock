<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="sidebar-07\sidebar-07\css\style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="">
				<a href="#" class="logo"><img src="https://orderhive.weebly.com/uploads/2/4/2/5/24257196/882673_orig.png"style ="height:40px;"></a>
          <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php?submit=dashboard.php" title="">
              <span class="fa fa-home"></span>Home
            </a>
          </li>
          <li>
            <a href="index.php?submit=category_setup.php" title="">
              <span class="fa fa-user"></span>Category Setup
            </a>
          </li>
          <li>
            <a href="index.php?submit=company_setup.php" title="">
              <span class="fa fa-sticky-note"></span>Company Setup
            </a>
          </li>
          <li>
            <a href="index.php?submit=item_setup.php" title="">
              <span class="fa fa-cogs"></span>Item Setup
            </a>
            
          </li>
          <li>
            <a href="index.php?submit=searchandview.php" title="">
              <span class="fa fa-paper-plane"></span>Search & View
            </a>
          </li>
          <li>
            <a href="index.php?submit=purchase.php" title="">
              <span class="fa fa-paper-plane"></span>Purchase
            </a>
            
          </li>
          <li>
            <a href="index.php?submit=sell.php" title="">
              <span class="fa fa-paper-plane"></span>Sell
            </a>
          </li>
          <li>
            <a href="index.php?submit=view_sales.php" title="">
              <span class="fa fa-paper-plane"></span>View Sales
            </a>
          </li>
        </ul>
        

        <div class="footer">
        	<p>Copyright &copy;</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <?php 
          if(isset($_GET['submit'])
        ){
            $page_path = $_GET['submit'];
          require $page_path;
        }else{
          require 'Dashboard.php';
        }
        ?>
      </div>
		</div>

    <script src="sidebar-07\sidebar-07\js\jquery.min.js"></script>
    <script src="sidebar-07\sidebar-07\js\popper.js"></script>
    <script src="sidebar-07\sidebar-07\js\bootstrap.min.js"></script>
    <script src="sidebar-07\sidebar-07\js\main.js"></script>
  </body>
</html>