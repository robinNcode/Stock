<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
        Stock_Mangement_System
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>

.head{
  background-image: url("");
  height: 200px;  
}
</style>
</head>
<body>

	<form method="POST" action="database/categorySetup.php">

    <?php require_once 'database/categorySetup.php'; ?>

    <!-- Sesssion Messege -->

  <?php if(isset($_SESSION['messege'])): ?>

  <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
      <?php 
        echo "<center><marquee><h3>".$_SESSION['messege']."</h3></marquee></center>";
        unset ($_SESSION['messege']);
        ?>
  </div>
  <?php endif; ?>

  <?php 
    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
    $show = $conn->query("SELECT * FROM category") or die ("Failed ". $conn->error);

    $show->fetch_assoc();
  ?>


    <div class="container">
      <legend class="bg-primary text-light"><center><i class="fas fa-fw fa-briefcase"></i>Category Setup</center></legend>
  <div class="card-body border border-primary">
          <fieldset>
          <!--name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name_id">Category Name :
              <span class="text-danger font-weight-bold">*</span>
            </label>
			<div class="col-md-7">
				<input type="text" id="category" class="form-control" name="category">
            </div>
            
          </div>
          <div class="container">
        <div class="row">
          <div class="col-10">
            <button type="submit" name="save" class="btn btn-warning float-right">Save
            </button>
          </div>
        </div>
      </div>
      <br>
      <br>
  </fieldset>
  <table class="table table-hover border border-primary dataTable" id="example">
  <thead>
    <tr>
      <th scope="col">SERIAL NO</th>
      <th scope="col">CATEGORY</th>
      <th scope="col" colspan="2"> <center>ACTION</center></th>
    </tr>
  </thead>

<?php while ($row=$show->fetch_assoc()): ?>
  <tbody>
    <tr>
      <td><?php echo $row['id']; ?> </td>
      <td><?php echo $row['Category']; ?> </td>
      <td align="center">
        <a href="category_setup.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning">EDIT </a>
        <a href="database/categorySetup.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
       </td>
      
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
</div>
</form>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>	