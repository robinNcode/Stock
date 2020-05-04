
<?php require_once 'database/CompanySetup.php'; ?>

<form method="POST" name="myForm" action="database/CompanySetup.php">

<?php 
    $conn = new mysqli('localhost','root','','sms')or die("Connection failed: " . $conn->connect_error);
    $show = $conn->query("SELECT * FROM company") or die ("Failed ". $conn->error);

  ?>

                    <div class="container">
                        <legend class="bg-primary text-light">
                            <center><i class="fas fa-fw fa-briefcase"></i>Company Setup</center>
                        </legend>
                        <div class="card-body border border-primary">
                            <fieldset>
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <!--name -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="company">Company Name :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" oninput="return companyvalidate()" id="company" class="form-control" name="company" value="<?= $company; ?>">
                                        <span id="demo" class="font-weight-bold"></span>
                                    </div>

                                </div>
                                <!--Re-Presentative -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="Presentative">Re-Presentative :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" oninput="return repvalidate()" id="Presentative" class="form-control" name="representative" value="<?= $representative; ?>">
                                        <span id="demo1" class="font-weight-bold"></span>
                                    </div>

                                </div>
                                <!--Contact Number -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="coname_id">Contact Number :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="coname_id" oninput="return coumvalidate()" class="form-control" name="conum" value="<?= $conum; ?>" >
                                        <span id="demo2" class="font-weight-bold"></span>
                                    </div>

                                </div>
                                <div id="demo3"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-10">
                                            <?php if ($update == true): ?>
                                                <button data-toggle="modal" data-target="#updateMsg" type="submit" name="update" class="btn btn-primary float-right ">UPDATE</button>
                                            <?php else: ?>
                                                <button onmouseover="return validate()" data-toggle="modal" data-target="#saveMsg" type="submit" name="save" class="btn btn-warning float-right ">SAVE</button>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </fieldset>
                            <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark">
                            <table class="table table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th >SERIAL NO</th>
                                        <th >Company</th>
                                        <th >Re-presentative</th>
                                        <th >Contact</th>
                                        <th>
                                            <center>ACTION</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $serial=1; while ($row=$show->fetch_assoc()): ?>
                                   
                                        <tr>
                                            <td>
                                                <?php echo $serial++; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['company']; ?>
                                            </td>
                                             <td>
                                                <?php echo $row['representative']; ?>
                                            </td>
                                             <td>
                                                <?php echo $row['conum']; ?>
                                            </td>
                                            <td align="center">
                                                <a href="index.php?submit=Company_setup.php&edit=<?php echo $row['id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                <a href="database/Companysetup.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"><div data-toggle="modal" data-target="#deleteMsg"> <i class="fas fa-trash-alt"></i></div></a>
                                            </td>

                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                            </table>
                        </div>
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
        <h5 class="text-success">Company's Information has been Saved!</h5>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Update Modal -->
<div class="modal fade" id="updateMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h4 class="modal-title" id="exampleModalLabel">MESSEGE</h4></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-danger" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-warning">Company's Information has been Updated!</h5>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Delete Modal -->
<div class="modal fade" id="deleteMsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h4 class="modal-title" id="exampleModalLabel">MESSEGE</h4></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-danger" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-danger">Company's Information has been Deleted!</h5>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<script>

function companyvalidate() {
  var company = document.forms["myForm"]["company"].value;
    if (company == "") {
        var str1='<h6 class="text-danger">Company name must be filled out.!</h6>';
        document.getElementById("demo").innerHTML = str1;
        return false;
    }
    else{
        var str1='<h6 class="text-success">Done!!</h6>';
        document.getElementById("demo").innerHTML = str1;
        return false;
    }
}
function repvalidate(){
    var representative = document.forms["myForm"]["representative"].value;
    if(representative == ""){
        var str1='<h6 class="text-danger">Representative name required.!</h6>';
        document.getElementById("demo1").innerHTML = str1;
        return false;
    }
    else{
        var str1='<h6 class="text-success">Done!!</h6>';
        document.getElementById("demo1").innerHTML = str1;
        return false;
    }
}
function coumvalidate() {
    var conum = document.forms["myForm"]["conum"].value;
    if(conum == ""){
        var str1='<h6 class="text-danger">Contact Number required.!</h6>';
        document.getElementById("demo2").innerHTML = str1;
        return false;
    }
    else{
        var str1='<h6 class="text-warning">Not more or less than 11 digits.</h6>';
        document.getElementById("demo2").innerHTML = str1;
        return false;
    }
}
function validate() {
    var company = document.forms["myForm"]["company"].value;
    var representative = document.forms["myForm"]["representative"].value;
    var conum = document.forms["myForm"]["conum"].value;
    if (company == "" || representative == "" || conum =="") {
        var str1='<marquee><h6 class="text-danger">Empty field must be filled out..!</h6></marquee>';
        document.getElementById("demo3").innerHTML = str1;
        return false;
    }
    else if (company != "" && representative != "" && conum !="") {
        var str1='<marquee><h6 class="text-danger">Done..!</h6></marquee>';
        document.getElementById("demo3").innerHTML = str1;
        return false;
    }
}
</script>