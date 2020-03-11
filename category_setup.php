<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
        Stock_Mangement_System
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
	<marquee>Do it fast......(-_-)</marquee>

	<div class="container">
		<div class="row">
			<div class=" ">
			
			</div>
		</div>
	</div>
	<form method="POST" action="http://localhost/CI_Result_processor/crud/info">
    <div class="container">
      <legend class="bg-info text-light"><center><i class="fas fa-fw fa-briefcase"></i>Category Setup</center></legend>
  <div class="card-body border border-primary">
          <fieldset>
          <!--name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name_id">Category Name :
              <span class="text-danger font-weight-bold">*</span>
            </label>
			<div class="col-md-7">
				<input type="text" id="versity_id" class="form-control" name="versity_id">
            </div>
            
          </div>
          <div class="container">
        <div class="row">
          <div class="col-10">
            <button type="submit" name="create" value="yes" class="btn btn-warning float-right">Save
            </button>
          </div>
        </div>
      </div>
      <br>
      <br>
  </fieldset>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Stationary</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Cosmetics</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Electronics</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Kitchen Items</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</form>
</body>
</html>	