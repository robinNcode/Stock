<?php 
    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
    $show3 = $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);
    $row=$show3->fetch_assoc();
  ?>

<form method="POST" action="http://localhost/CI_Result_processor/crud/primary">
    <div class="container">
        <legend class="bg-primary text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>Purchase</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
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
                                    <option value="<?php echo $com['id'];?>">
                                        <?php echo $com['company'];?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
                    </div>

                </div>
                <!--item name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Item Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <select id="versity_id" class="form-control" name="versity_id">
                            <option value="">Select a Option</option>
                        </select>

                    </div>

                </div>
                <!--Available Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Available Quantity:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="name_id" id="name_id" placeholder="View" />
                    </div>

                </div>
                <!--Re-Order Level -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="level">Re-Order Level:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="level" id="level" value="<?= $row['level']; ?>" readonly/>
                    </div>

                </div>
                <!--Stock In Quantity -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Purchase Quantity :
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="name_id" id="name_id" placeholder="Input Stock In Quantity " />
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

        </div>
    </div>
</form>