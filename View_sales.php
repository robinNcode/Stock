<form method="POST" action="">
    <div class="container">
        <legend class="bg-primary text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>View Sales Between Two Dates</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
                <!--From Date -->
                <div class="container">
                    <div class="row">
                        <label class="col-md-3 col-form-label" for="fdate">From Date :</label>
                        <div class='col-sm-7'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='date' class="form-control" name="fdate">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--To Date -->
                <div class="container">
                    <div class="row">
                        <label class="col-md-3 col-form-label" for="tdate">To Date :</label>
                        <div class='col-sm-7'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='date' class="form-control" name="tdate">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <button type="submit" name="search" class="btn btn-primary float-right">Search
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </fieldset>
            <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th >Serial No</th>
                        <th >Company</th>
                        <th >Item </th>
                        <th >Quantity</th>
                        <th >SELL DATE</th>
                    </tr>
                </thead>
                <?php if(isset($_POST['search'])): ?>
                <?php 
                        $fdate=$_POST['fdate'];
                        $tdate=$_POST['tdate'];
                        
                        $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
                        $stock= $conn->query("SELECT * FROM stockout") or die ("Failed ". $conn->error);
                        $stock1= $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);
                        $count=1;
                      ?>
                <tbody>
                    <?php while ($cat=$stock->fetch_assoc()):
                    $cat1=$stock1->fetch_assoc();

                     ?>
                    <tr>
                        <?php if($cat['date'] >= $fdate && $cat['date'] <= $tdate ): ?>
                        <td><?= $count++; ?></td>
                        <td><?= $cat['s_company']; ?></td>
                        <td><?php 
                        echo $cat1['id']." == ".$cat['s_item'];
                        if ($cat1['id'] == $cat['s_item']){
                            echo $cat1['item'];
                        }
                        else echo "Invalid Item" 
                            ?></td>
                        <td><?= $cat['sell_quantity']; ?></td>
                        <td><?= $cat['date']; ?></td>
                        
                    <?php endif; ?>
                    </tr>
                    <?php endwhile; ?>
                <?php endif ;?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</form>