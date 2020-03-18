<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <title>
        Stock Management SysteM
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sidebar-07/sidebar-07/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <style>
        hr.new5 {
            border: 2px solid black;
        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="">
            <a href="index.php" class="logo"><img alt="Stock Management System" src="https://orderhive.weebly.com/uploads/2/4/2/5/24257196/882673_orig.png" style="height:40px;"></a>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="index.php?submit=dashboard.php" title="Dashboard">
                        <span class="fa fa-home"></span>Home
                    </a>
                </li>
                <li>
                    <a href="index.php?submit=category_setup.php" title="Category Setup">
                        <span class="fa fa-sticky-note"></span>Category Setup
                    </a>
                </li>
                <li>
                    <a href="index.php?submit=company_setup.php" title="Company Setup">
                        <span class="fa fa-user"></span>Company Setup
                    </a>
                </li>
                <li>
                    <a href="index.php?submit=item_setup.php" title="Item Setup">
                        <span class="fa fa-cogs"></span>Item Setup
                    </a>

                </li>
                <li>
                    <a href="index.php?submit=searchandview.php" title="Search & View">
                        <span class="fa fa-paper-plane"></span>Search & View
                    </a>
                </li>
                <li>
                    <a href="index.php?submit=purchase.php" title="Purchase">
                        <span class="fa fa-paper-plane"></span>Purchase
                    </a>

                </li>
                <li>
                    <a href="index.php?submit=sell.php" title="Sell">
                        <span class="fa fa-paper-plane"></span>Sell
                    </a>
                </li>
                <li>
                    <a href="index.php?submit=view_sales.php" title="View Sales">
                        <span class="fa fa-paper-plane"></span>View Sales
                    </a>
                </li>
            </ul>

            <div class="footer">
                <p>Copyright &copy; Sajib & Robin</p>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4">

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
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
                                        <span class="caret"><i class="fa fa-user"></i>Profile</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Your Profile</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="login/log-inpage.php">Log Out</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://robin.adovasoft.com/Beginningworks/myportfolio/contactMe.html">Contact</a>
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
    <br>
    <hr class="new5">
    <footer>
        <div class="container-fluid bg-light py-3 p-md-4 border border-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row py-0">
                            <div class="col-sm-1 hidden-md-down">
                                <a class="bg-circle bg-info" href="#">
                                    <i class="fa fa-2x fa-fw fa-address-card"></i>
                                </a>
                            </div>
                            <div class="col-sm-11 text-dark">
                                <div>
                                    <h4>Contact</h4>
                                    <p><span class="header-font"></span><span class="header-font"></span>sajib.adovasoft.com</p>
                                    <p><span class="header-font"></span><span class="header-font"></span>robin.adovasoft.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="d-inline-block">
                            <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
                                <a href="https://www.facebook.com/arrobinkhan34">
                                    <i class="fa-3x fab fa-facebook-square bg-light"></i>
                                </a>
                            </div>
                            <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
                                <a href="https://www.instagram.com/msmrobin07/">
                                    <i class="fa-3x fab fa-instagram bg-light"></i>
                                  </a>
                            </div>

                            <div class="bg-circle-outline d-inline-block" style="background-color:#0077B5">
                                <a href="https://github.com/robinNcode">
                                    <i class="fa-3x fab fa-github bg-light"></i>
                                  </a>
                            </div>
                            <div class="bg-circle-outline d-inline-block" style="background-color:#d34836">
                                <a href="https://www.google.com/">
                                    <i class="fa-3x fab fa-google text-white"></i>
                                  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Image Slider  -->
    <script>
        var i = 0;
        var time = 3000;
        var images = [];

        //image list
        images[0] = 'images/Stock1.jpg';
        images[1] = 'images/Stock4.jpg';
        images[2] = 'images/stock2.jpg';
        images[3] = 'images/Stock6.jpg';
        images[4] = 'images/Stock5.jpg';
        images[5] = 'images/Stock3.jpg';

        function changeImg() {
            document.slide.src = images[i];

            if (i < images.length - 1) {
                i++;
            } else i = 0;
            setTimeout("changeImg()", time);
        }

        window.onload = changeImg;
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="sidebar-07/sidebar-07/js/main.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->
    
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>

</html>