<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("https://www.seventhgenerationadvisors.org/wp-content/uploads/2018/05/stock-exchange-value-768x509.jpg");
  
  /* Add the blur effect */
  filter: blur(4px);
  -webkit-filter: blur(2px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>
<div class="bg-primary text-light">
    <marquee><h1>STOCK MANAGEMENT SYSTEM</h1></marquee>
</div>

<div>
<div class="bg-image">
  
</div>

<div class="bg-text">
  <div class="card" style="width: 60rem;">
  <div class="card-body text-center">
    <h1 class="card-title">Log In Panel</h1>
        
    <form class="form-inline" method="POST" action="../index.php">
        <div class="row">
          <div class="col-3">
            <label for="email" class="mr-sm-2">User Name:</label>
          </div>
          <div class="col-3">
            <input type="email" name="username" class="form-control mb-2 mr-sm-2" placeholder="Enter user name" id="email">
          </div>
        </div>
        <div class="row">
          <div class="col-3">       
            <label for="pwd" class="mr-sm-2">Password:</label>
          </div>
          <div class="col-7">
            <input type="password" name="pass" class="form-control mb-2 mr-sm-2" placeholder="Enter password" id="pwd">
          </div>
            <br>
       <button type="submit" name="save" class="btn btn-success mb-2">Log In</button>
       <hr>
       <a href="register.php"><h4>REGISTER</h4></a>
</form> 
</div>
  </div>
</div>
</div>
</div>
</body>
</html>
