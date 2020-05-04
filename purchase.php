
<?php 
    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
    $show = $conn->query("SELECT * FROM stockin") or die ("Failed ". $conn->error);
    $row=$show->fetch_assoc();
  ?>

<form method="POST" name="myForm" action="database/purchaseStock.php">
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <legend class="bg-primary text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>Purchase</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
                <!-- Date and Time -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="date">Date:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="date" name="p_date" id="date" />
                    </div>

                </div>
                <!--Company Name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="company">Company Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                         <?php 
                        $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
                         $company= $conn->query("SELECT * FROM company") or die ("Failed ". $conn->error);
                         $item= $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);
                      ?>
                            <select id="company" class="form-control" name="company">
                                <option value="">Select Option</option>
                                <?php while ($com=$company->fetch_assoc()): ?>
                                    <option value="<?php echo $com['company'];?>">
                                        <?php echo $com['company'];?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
                    </div>

                </div>
                <!--item name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="item_id">Item Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <select onchange="data()" id="item_id" class="form-control" name="item">
                                <option value="">Select Option</option>

                                <?php while ($com=$item->fetch_assoc()): ?>
                                    <option value="<?= $com['id']; ?>">
                                        <?php echo $com['item'];?>
                                    </option>
                                <?php endwhile;?>
                            </select>

                    </div>

                </div>
                <!--Available Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Available Quantity:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" value="<?= $row['$available_quantity']; ?> " id="name_id" readonly/>
                    </div>

                </div>
                <!--Re-Order Level -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="avail_id">Re-Order Level:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7"> 
                        <?php /*if($row['category'] && $row['company']){
                            $level=$row['level'];
                        }
                        else $level=0;

                        */ ?>
                        <input class="form-control" type="text" id="avail_id" value="" readonly/>
                    </div>
                </div>
                <!--Stock In Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="Purchase">Purchase Quantity :
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input oninput ="return pqvalidate()"class="form-control" type="text" name="pq" id="Purchase" placeholder="Input Purchase Quantity " />
                        <span id="demo"></span>
                    </div>

                </div>
                <div id="demo1"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <button data-toggle="modal" data-target="#saveMsg" onmouseover="return validate()" type="submit" name="add" value="yes" class="btn btn-warning float-right">Purchase
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
        <h5 class="text-success">Successfull..!</h5>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script>
function pqvalidate() {
    var x = document.forms["myForm"]["pq"].value;
    if (x == "") {
        var str1='<h6 class="text-danger">Purchase Quantity required..!</h6>';
        document.getElementById("demo").innerHTML = str1;
        return false;
    }
    else{
        var str1='<h6 class="text-success">Done..!</h6>';
        document.getElementById("demo").innerHTML = str1;
        return false;
    }
}

function validate() {
    var x = document.forms["myForm"]["pq"].value;
    if (x == "") {
        var str1='<h6 class="text-danger"><marquee>All fields must be filled out..!</h6></marquee>';
        document.getElementById("demo1").innerHTML = str1;
        return false;
    }
}
</script>



<script>
    /*window.onload = function() {
  var d = new Date();
  var n = d.toLocaleDateString();

  console.log(n);
  document.getElementById('date').value = n;
}*/
</script>

<script type="text/javascript">
     function data() {
        var ajax = new XMLHttpRequest() ;

        ajax.open ("GET","ajax/ajax20.php?level ="+document.getElementById("item_id").value,false);

        ajax.send();
        alert(ajax.responseText);
        document.getElementById("avail_id").innerHTML = ajax.responseText;
     }

</script>






