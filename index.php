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
			<nav id="sidebar" class="active">
				<a href="#" class="logo"><img src="https://orderhive.weebly.com/uploads/2/4/2/5/24257196/882673_orig.png"style ="height:40px;"></a>
        <form method="get">
          <ul class="list-unstyled components mb-5">
          <li class="active">
            <button type="submit" name="submit" value="dashboard.php" class="btn btn-primary"><span class="fa fa-home"></span>Home</button>
          </li>
          <li>
            <button type="submit" name="submit" value="category_setup.php" class="btn btn-primary"><span class="fa fa-user"></span>Category Setup</button>
          </li>
          <li>
            <button type="submit" name="submit" value="company_setup.php" class="btn btn-primary"><span class="fa fa-sticky-note"></span>Company Setup</button>
          </li>
          <li>
            <button type="submit" name="submit" value="item_setup.php" class="btn btn-primary"><span class="fa fa-cogs"></span>Item Setup</button>
          </li>
          <li>
            <button type="submit" name="submit" value="search&view.php" class="btn btn-primary"><span class="fa fa-paper-plane"></span>Search & View</button>
          </li>
          <li>
            <button type="submit" name="submit" value="purchase.php" class="btn btn-primary"><span class="fa fa-paper-plane"></span>Purchase</button>
            
          </li>
          <li>
            <button type="submit" name="submit" value="sell.php" class="btn btn-primary"><span class="fa fa-paper-plane"></span>Sell</button>
            
          </li>
          <li>
            <button type="submit" name="submit" value="view_sales.php" class="btn btn-primary"><span class="fa fa-paper-plane"></span>View Sales</button>
          </li>
        </ul>
        </form>
        

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
          include $page_path;
        }else{
          include 'Dashboard.php';
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