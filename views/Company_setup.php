
<?php require_once '../database/CompanySetup.php'; ?>

<form method="POST" action="../database/CompanySetup.php">
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
                                        <input type="text" id="company" class="form-control" name="company" value="<?= $company; ?>">
                                    </div>

                                </div>
                                <!--Re-Presentative -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="Presentative">Re-Presentative :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="Presentative" class="form-control" name="representative" value="<?= $representative; ?>">
                                    </div>

                                </div>
                                <!--Contact Number -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="coname_id">Contact Number :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="coname_id" class="form-control" name="conum" value="<?= $conum; ?>" >
                                    </div>

                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-10">
                                            <?php if ($update == true): ?>
                                                <button type="submit" name="update" class="btn btn-primary float-right ">UPDATE</button>
                                            <?php else: ?>
                                                <button type="submit" name="save" class="btn btn-warning float-right ">SAVE</button>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </fieldset>
                            <table class="table table-hover border border-primary" id="example">
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
                                                <a href="views/index.php?submit=Company_setup.php&edit=<?php echo $row['id']; ?>" class="btn btn-warning">EDIT</a>
                                                <a href="../database/Companysetup.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
                                            </td>

                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
</form>

