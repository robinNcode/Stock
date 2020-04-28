<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Stock management system login
    </title>

    <style>
        hr.new5 {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <div class="container border border-primary shadow-lg p-3 mb-5 bg-white text-center" style="margin-top: 80px;">

        <img class="" src="../images/logo.jpeg" style="height:150px; width:1000px;" alt="STOCK MANAGEMENT SYSTEM">

    </div>

    <div class="container">
        <div class="card-header">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <div class="row ">
                        <a href="index.php?submit=register.php"> 
                            <div class="col-6 shadow p-3 mb-5 bg-white">
                            <h3>Register</h3></a>
                        </div>
                        <a href="index.php">
                            <div class="col-6 shadow-lg p-3 mb-5 bg-white" active>
                            <h3>Log in</h3></a>

                        </div>                 
                   </div>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </div>
    <?php

        if(isset($_GET['submit']))
          {

            $page_path = $_GET['submit'];
          require $page_path;
        }
        else {
            require 'log-inpage.php';
            }
    ?>

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

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>