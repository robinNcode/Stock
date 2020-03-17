
<form method="POST" action="database/companySetup.php">

    

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
                            <center><i class="fas fa-fw fa-briefcase"></i>company Setup</center>
                        </legend>
                        <div class="card-body border border-primary">
                            <fieldset>
                                <!--name -->
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="name_id">company Name :
                                        <span class="text-danger font-weight-bold">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="company" class="form-control" name="company">
                                    </div>

                                </div>
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
                            <table class="table table-hover border border-primary" id="example">
                                <thead>
                                    <tr>
                                        <th >SERIAL NO</th>
                                        <th >company</th>
                                        <th>
                                            <center>ACTION</center>
                                        </th>
                                    </tr>
                                </thead>
 <tbody>
                                <?php while ($row=$show->fetch_assoc()): ?>
                                   
                                        <tr>
                                            <td>
                                                <?php echo $row['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['company']; ?>
                                            </td>
                                            <td align="center">
                                                <a href="index.php?submit=company_setup.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning">EDIT </a>
                                                <a href="database/companySetup.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
                                            </td>

                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
</form>

