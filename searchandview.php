
<?php 
    $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
    $show3 = $conn->query("SELECT * FROM item") or die ("Failed ". $conn->error);

  ?>


	<form method="POST" action="http://localhost/CI_Result_processor/crud/primary">
    <div class="container">
      <legend class="bg-primary text-light"><center><i class="fas fa-fw fa-briefcase"></i>Sarch & View Item's Summary</center></legend>
  <!-- <div class="card-body border border-primary">
          <fieldset>
          
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name_id">Category :
              <span class="text-danger font-weight-bold">*</span>
               </label>
				<div class="col-md-7">
              		<?php 
                        $conn = new mysqli('localhost', 'root','', 'sms')or die("Connection failed: " . $conn->connect_error);
                        $category= $conn->query("SELECT * FROM category") or die ("Failed ". $conn->error);
                      ?>
                            <select id="category" class="form-control" name="category">
                                <option value="">Select Option</option>
                                <?php while ($cat=$category->fetch_assoc()): ?>
                                    <option value="<?php echo $cat['id'];?>">
                                        <?php echo $cat['Category'];?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
            </div>
            
          </div>
             
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
                                    <option value="<?php echo $com['id'];?>">
                                        <?php echo $com['company'];?>
                                    </option>
                                    <?php endwhile;?>
                            </select>
              
            </div> 
     </div>      
      
          <div class="container">
        <div class="row">
          <div class="col-10">
            <button type="submit" name="create" value="yes" class="btn btn-primary float-right">Search
            </button>
          </div>
        </div>
      </div>-->
        
      <br>
      <br>
  </fieldset>
  <table class="table table-hover border border-primary" id="example">
  <thead>
    <tr>
      <th>Serial No</th>
      <th>Item</th>
      <th>Company</th>
      <th>Category</th>
      <th>Purchase Date</th>
      <th>Available Quantity</th>
      <th>Re-Order Level</th>
    </tr>
  </thead>
  <tbody>
    <?php $serial=1; while ($row3=$show3->fetch_assoc() ): ?>

    <tr>
      <th><?= $serial++; ?></th>
      <td><?= $row3['item']; ?></td>
      <td><?= $row3['company']; ?></td>
      <td><?= $row3['category']; ?></td>
      <td><?= "3-22-20"; ?></td>
      <td><?php //$row3['available']; ?></td>
      <td><?= $row3['level']; ?></td>
    </tr>
  <?php endwhile;?>

  </tbody>
</table>
</div>
</div>
</form>
