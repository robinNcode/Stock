<!-- Sesssion Messege -->

    <?php if(isset($_SESSION['messege'])){
        echo "<div class=\"alert alert-".$_SESSION['msg_type']."\">";
        echo "<center><marquee><h3>".$_SESSION['messege']."</h3></marquee></center>";
        unset ($_SESSION['messege']);
        echo "</div>";
    }
    //else echo "kaj Kore Nah";
       
    ?>
<form method="POST" action="database/stockout.php">
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <legend class="bg-primary text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>Sell</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
                <!-- Date and Time -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="date">Date:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="date" name="date" id="date"/>
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
                      ?>
                            <select id="company" class="form-control" name="company">
                                <option value="">Select Option</option>
                                <?php while ($com=$company->fetch_assoc()): ?>
                                    <option value="<?= $com['company']; ?>">
                                        <?php echo $com['company']; ?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
                    </div>

                </div>
                <!--item name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="sitem_id">Item Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <?php 
                         $item= $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);
                      ?>
                            <select id="sitem_id" onchange="available()" class="form-control" name="item">
                                <option value="">Select Option</option>

                                <?php while ($com=$item->fetch_assoc()): ?>
                                    <option value="<?php echo $com['id']; ?>" >
                                        <?php echo $com['item']; ?>
                                    </option>
                                <?php endwhile;?>
                            </select>

                    </div>

                </div>
                <!--Available Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="available">Available Quantity:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="number" name="available" id="available" placeholder="View" value="<?php echo $availavle=0; ?>" readonly/>
                    </div>

                </div>
                <!--Re-Order Level -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="avail_id">Re-Order Level:</label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="recorder" id="avail_id" value="" readonly/>
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
//     window.onload = function() {
//   var d = new Date();
//   var n = d.toLocaleDateString();

//   console.log(n);
//   document.getElementById('date').value = n;
// }
</script>

<script type="text/javascript">

        function available() {
            var avail = new XMLHttpRequest ();

        avail.open("GET","ajax/ajax20.php?sitem = "+document.getElementById("sitem_id").value,false);
        avail.send(null);
        alert(avail.resposeText);
        document.getElementById("avail_id").value = avail.responseText;

        }
         
    </script>
 