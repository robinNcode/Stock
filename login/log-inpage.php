<div class="row pt-4">
    <div class="col-3">

    </div>
        <div class="col-6">
            <form name="myForms" class="form-inline" method="POST" action="../index.php">

                <!-- Body Of CARD -->

                <div class="card-body shadow-lg p-3 mb-5 bg-white text-center">
                    
                    <!--User Name -->
                    <div class="form-group row pt-4">
                        <label class="col-md-5 col-form-label" for="email">
                            <h4><i class="ui-icon-user input-icon"></i>User Name :</h4>

                        </label>
                        <div class="col-md-7">
                            <input type="email" class="form-control" name="username" placeholder="Enter username" id="email">
                        </div>

                    </div>
                    <br>
                    <br>

                    <!--password -->
                    <div class="form-group row">
                        <label class="col-md-5 col-form-label" for="pwd">
                            <h4>Password :</h4>

                        </label>
                        <div class="col-md-7">
                            <input type="password" oninput="return Form()" class="form-control" name="pass" placeholder="Enter password" id="pwd">
                            <span id="demo"></span>
                        </div>

                    </div>
                    <br>
                    <br>

                    <button type="submit" name="save" class="btn btn-success">LOG IN</button>
                </div>
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>
<script>

function Form() {
  var x = document.forms["myForm"]["pass"].value;
  if (x != "sajibrobi") {
    var str1='<h6 class="text-danger">Password incorrect <br> Try again!!</h6>';
    document.getElementById("demo").innerHTML = str1;
    return false;
  }
  else{
    var str1='<h6 class="text-success">Done!!</h6>';
    document.getElementById("demo").innerHTML = str1;
    return false;
  }
}
    
</script>
