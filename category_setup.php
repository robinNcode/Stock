<?php //var_dump($_POST); ?>

<?php require_once 'database/categorySetup.php'; ?>
<!-- Sesssion Messege -->

    <?php if(isset($_SESSION['messege'])){
        echo "<div class=\"alert alert-".$_SESSION['msg_type']."\">";
        echo "<center><marquee><h3>".$_SESSION['messege']."</h3></marquee></center>";
        unset ($_SESSION['messege']);
        echo "</div>";
    }
    //else echo "kaj Kore Nah";
       
    ?>

<form name="myForm" method="POST" action="database/categorySetup.php">       

<?php 
    $conn = new mysqli('localhost','root','','sms') or die("Connection failed: " . $conn->connect_error);
    $show = $conn->query("SELECT * FROM category") or die ("Failed ". $conn->error);

  ?>
        <input type="hidden" name ="id" value ="<?= $id ?>">
                    <div class="container">
                        <legend class="bg-primary text-light">
                            <center><i class="fas fa-fw fa-briefcase"></i>Category Setup</center>
                        </legend>
                        <div class="card-body border border-primary">
                            <fieldset>
                                <!--name -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Category Name :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" oninput="return validateForm()" name="category" value="<?= $category; ?>">
                                        <span id="demo" class="font-weight-bold"></span>
                                    </div>

                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-10">
                                            <?php if ($update == true): ?>
                                                <button type="submit" data-toggle="modal" data-target="#updateMsg"  name="update" class="btn btn-primary float-right ">UPDATE</button>
                                            <?php else: ?>
                                                <button type="submit" onmouseover="return validate()" data-toggle="modal" data-target="#saveMsg" name="save" class="btn btn-warning float-right ">SAVE</button>
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
                                        <th >CATEGORY</th>
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
                                                <?php echo $row['Category']; ?>
                                            </td>
                                            <td align="center">
                                                <a href="index.php?submit=category_setup.php&edit=<?php echo $row['id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                
                                                <a href="database/categorySetup.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"><div data-toggle="modal" data-target="#deleteMsg"> <i class="fas fa-trash-alt"></i></div></a>
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
        <h5 class="text-success">Category name has been Saved!</h5>
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
        <h5 class="text-warning">Category name has been Updated!</h5>
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
        <h5 class="text-danger">Category name has been Deleted!</h5>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<script>

function validateForm() {
  var x = document.forms["myForm"]["category"].value;
  if (x == "") {
    var str1='<h6 class="text-danger">Category name must be filled out</h6>';
    document.getElementById("demo").innerHTML = str1;
    return false;
  }
  else{
    var str1='<h6 class="text-success">Done!!</h6>';
    document.getElementById("demo").innerHTML = str1;
    return false;
  }
}
function validate() {
  var x = document.forms["myForm"]["category"].value;
  if (x == "") {
    var str1='<h6 class="text-danger">Category name must be filled out</h6>';
    document.getElementById("demo").innerHTML = str1;
    return false;
  }
}
</script>