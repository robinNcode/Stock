<form method="POST" action="database/categorySetup.php">
        <!-- Sesssion Messege -->

        <?php if(isset($_SESSION['messege'])): ?>

            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                <?php 
        echo "<center><marquee><h3>".$_SESSION['messege']."</h3></marquee></center>";
        unset ($_SESSION['messege']);
        ?>
            </div>
            <?php endif; ?>

                <?php 
    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
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
                                    <label class="col-md-3 col-form-label" for="name_id">Name :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category" placeholder="Enter your Name">
                                    </div>

                                </div>
                                <!--Phone name -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Phone Number :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category" value="<?= $category; ?>">
                                    </div>

                                </div>
                                <!--Email -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Email :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category" value="<?= $category; ?>">
                                    </div>

                                </div>
                                <!--Address -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">Address :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="category" class="form-control" name="category" value="<?= $category; ?>">
                                    </div>

                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-10">
                                            <button type="submit" name="save" class="btn btn-warning float-right ">SAVE</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </fieldset>
                            
                        </div>
                    </div>
</form>


