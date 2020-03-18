
	<form method="POST" action="http://localhost/CI_Result_processor/crud/primary">
    <div class="container">
      <legend class="bg-primary text-light"><center><i class="fas fa-fw fa-briefcase"></i>Sarch & View Item's Summary</center></legend>
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
      </div>
      <br>
      <br>
  </fieldset>
  <table class="table table-hover">
  <thead>
    <tr>
      <th >Serial No</th>
      <th  >Item</th>
      <th  >Company</th>
      <th  >Category</th>
      <th  >Available Quantity</th>
      <th  >Recorder Level</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th  >1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th  >2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th  >3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th  >4</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th  >5</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</form>
