
<form method="POST" action="database/stock.php">
    <input type="hidden" name="table" value="sell">
    <div class="container">
        <legend class="bg-primary text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>Sell</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
                <!-- Date and Time -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="date">Date:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="date" id="date" readonly/>
                    </div>

                </div>
                <!--Company Name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Company Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <?php 
                        $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
                         $company= $conn->query("SELECT * FROM company") or die ("Failed ". $conn->error);
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
                    <label class="col-md-3 col-form-label" for="item">Item Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <?php 
                         $item= $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);
                      ?>
                            <select id="item" class="form-control" name="item">
                                <option value="">Select Option</option>
                                <?php while ($com=$item->fetch_assoc()): ?>
                                    <option value="<?php echo $com['item'];?>">
                                        <?php echo $com['item'];?>
                                    </option>
                                    <?php endwhile;?>
                            </select>

                    </div>

                </div>
                <!--Available Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="available">Available Quantity:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="available" id="available" placeholder="View" value="<?php echo $availavle=0; ?>" readonly/>
                    </div>

                </div>
                <!--Recoder Level -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="recorder">Recoder Level:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="recorder" id="recorder" placeholder="View" value="<?php echo $recordere=0; ?>" readonly/>
                    </div>

                </div>
                <!--Stock In Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="sell_quantity">Sell Quantity :
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="sell_quantity" id="sell_quantity" placeholder="Input Sell Quantity " />
                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <button type="submit" name="sell" class="btn btn-primary float-right">Sell
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </fieldset>
            <!-- <table class="table table-hover">
                <thead>
                    <tr>
                        <th >Serial No</th>
                        <th >Item</th>
                        <th >Company</th>
                        <th >Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table> -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12" style="">
                        <button type="submit" name="sell" class="btn btn-success float-right">Sell
                        </button>
                    </div>
                    <div class="col-4">
                        <button type="submit" name="create" value="yes" class="btn btn-warning float-right">DAMAGE
                        </button>
                    </div>
                    <div class="col-4">
                        <button type="submit" name="create" value="yes" class="btn btn-danger float-right">LOST
                        </button>
                    </div>
                </div>
            </div> -->
        </div>
      </div>
</form>

<script>
    window.onload = function() {
  var d = new Date();
  var n = d.toLocaleDateString();

  console.log(n);
  document.getElementById('date').value = n;
}
</script>