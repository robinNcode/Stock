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

</style>
</head>
<body>
	
		<form method="POST" action="database/register.php">
			
        		<input type="hidden" name ="id" value ="<?= $id ?>">
                    <div class="container">
                        <legend class="bg-primary text-light">
                            <center><i class="fas fa-fw fa-briefcase"></i>Registration Form</center>
                        </legend>
                   
                        <div class="card-body" >
                            <fieldset>
                                <div class="border border-primary ">
                                <!--name -->
                                <div class="p-4">
                                <div class="form-group row ">
                                    <label class="col-md-3 col-form-label" for="name_id">Name :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category">
                                    </div>

                                </div>
                                <!--Phone name -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Phone Number :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category">
                                    </div>

                                </div>
                                <!--Email -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Email :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category">
                                    </div>

                                </div>
                                <!--Address -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Address :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control">
                                    </div>

                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-10">
                                            <button type="submit" name="save" class="btn btn-success float-right ">CONFIRM</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                            </fieldset>
                          
                        </div>
                    </div>
                
			</form>

</body>
</html>