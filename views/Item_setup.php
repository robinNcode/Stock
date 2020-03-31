<?php if(isset($_SESSION['message'])): ?>
  <div class="container alert alert-<?= $_SESSION['msg_type']?>">
    
    <?php 
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
  </div>
  <?php endif ?>

<form method="POST" action="../database/itemSetup.php">
    <div class="container">
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
                            <select id="category" class="form-control" name="Category">
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
                            <select id="company" class="form-control" name="company">
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
                        <input class="form-control" type="text" name="item" id="item" placeholder="Input Item Name" />
                    </div>
                </div>

                <!--Re-Order Level -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="level">Re-Order Level:
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" name="level" id="level" placeholder="Input Recoder Level" />
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <button type="submit" name="save" class="btn btn-warning float-right">Save
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