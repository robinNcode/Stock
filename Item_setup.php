
<form method="POST" name="myForm" action="database/itemSetup.php">
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <legend class="bg-primary text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>Item Setup</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
                <!--Category -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Category :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <?php 
                        $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
                        $category= $conn->query("SELECT * FROM category") or die ("Failed ". $conn->error);
                      ?>
                            <select id="category" class="form-control" name="Category" required>
                                <option value="">Select Option</option>
                                <?php while ($cat=$category->fetch_assoc()): ?>
                                    <option value="<?php echo $cat['Category']; ?>" >
                                        <?php echo $cat['Category'];?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
                    </div>
                </div>
                <!--Company Name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Company Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <?php 
                        $company= $conn->query("SELECT * FROM company") or die ("Failed ". $conn->error);
                      ?>
                            <select id="company" class="form-control" name="company"required>
                                <option value="">Select Option</option>
                                <?php while ($com=$company->fetch_assoc()): ?>
                                    <option value="<?php echo $com['company']; ?>" >
                                        <?php echo $com['company']; ?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
                    </div>
                </div>

                <!--Item name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="item">Item Name:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input oninput="return itemvalidate()" class="form-control" type="text" name="item" id="item" placeholder="Input Item Name" />
                        <span id="demo" class="font-weight-bold"></span>
                    </div>
                </div>

                <!--Re-Order Level -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="level">Re-Order Level:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input oninput="return levelvalidate()" class="form-control" type="text" name="level" id="level" placeholder="Input Recoder Level" />
                        <span id="demo1" class="font-weight-bold"></span>
                    </div>
                </div>
                <div id="demo2"></div>
                <!-- Submit Button -->
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <button type="submit" data-toggle="modal" data-target="#saveMsg" onmouseover="return validate()" name="save" class="btn btn-warning float-right">Save
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </fieldset>
        </div>
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="saveMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h4 class="modal-title" id="exampleModalLabel">MESSEGE</h4></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-danger" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-success">Successfull..!<br>To Check go to the Search & View page</h5>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script>
function itemvalidate() {
    var x = document.forms["myForm"]["item"].value;
    if (x == "") {
        var str1='<h6 class="text-danger">Item name required..!</h6>';
        document.getElementById("demo").innerHTML = str1;
        return false;
    }
    else{
        var str1='<h6 class="text-success">Done..!</h6>';
        document.getElementById("demo").innerHTML = str1;
        return false;
    }
}
function levelvalidate() {
    var x = document.forms["myForm"]["level"].value;
    if (x == "") {
        var str1='<h6 class="text-danger">Re-Order Level required..!</h6>';
        document.getElementById("demo1").innerHTML = str1;
        return false;
    }
    else{
        var str1='<h6 class="text-success">Done..!</h6>';
        document.getElementById("demo1").innerHTML = str1;
        return false;
    }
}
function validate() {
    var x = document.forms["myForm"]["item"].value;
    var y = document.forms["myForm"]["level"].value;
    if (x == "" || y == "") {
        var str1='<h6 class="text-danger"><marquee>All fields must be filled out..!</h6></marquee>';
        document.getElementById("demo2").innerHTML = str1;
        return false;
    }
}
</script>