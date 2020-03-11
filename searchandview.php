<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
        Stock_Mangement_System
</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>

.head{
  background-image: url("");
  height: 200px;  
}
</style>
</head>
<body>
	<marquee>Do it fast......(-_-)</marquee>

	<div class="container">
		<div class="row">
			<div class=" ">
			
			</div>
		</div>
	</div>
	<form method="POST" action="http://localhost/CI_Result_processor/crud/info">
    <div class="container">
      <legend class="bg-info text-light"><center><i class="fas fa-fw fa-briefcase"></i>Sarch & View Item's Summary</center></legend>
  <div class="card-body border border-primary">
          <fieldset>
          <!--Category -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name_id">Category :
              <span class="text-danger font-weight-bold">*</span>
               </label>
				<div class="col-md-7">
              		<select id="versity_id" class="form-control" name="versity_id"  >
                		<option value="">Select a Option</option>
                		<option value="1">Stationary</option>
                		<option value="2">Cosmetics</option>
                		<option value="3">Electronics</option>
                		<option value="4">Kitchen Items</option>
    
                  <?php
                  if ($importers != NULL) {
                     /* foreach ($importers as $importer) {
                          ?>
                        <option value="<?= $importer->id ?>"
                                <?= set_select('party_id', $importer->id); ?>
                                <?= ($importer->id == 0) ? 'disabled' : NULL ?>><?= $importer->name ?></option>
                      <?php }*/
                  } ?>
              </select>
            </div>
            
          </div>
             <!--Company Name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name_id">Company Name :
              <span class="text-danger font-weight-bold">*</span>
               </label>
        <div class="col-md-7">
                  <select id="versity_id" class="form-control" name="versity_id"  >
                    <option value="">Select a Option</option>
                    <option value="1">Unilever</option>
                    <option value="2">RFL</option>
                    <option value="3">PRAN</option>
                    <option value="4">RUCHI</option>
                    <option value="5">WALTON</option>
                    <option value="6">RADHUNI</option>
    
                  <?php
                  if ($importers != NULL) {
                     /* foreach ($importers as $importer) {
                          ?>
                        <option value="<?= $importer->id ?>"
                                <?= set_select('party_id', $importer->id); ?>
                                <?= ($importer->id == 0) ? 'disabled' : NULL ?>><?= $importer->name ?></option>
                      <?php }*/
                  } ?>
              </select>
              
            </div>
        
     </div>      
      
          <div class="container">
        <div class="row">
          <div class="col-10">
            <button type="submit" name="create" value="yes" class="btn btn-outline-info float-right">Search
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
      <th scope="col">Serial No</th>
      <th scope="col">Item</th>
      <th scope="col">Company</th>
      <th scope="col">Category</th>
      <th scope="col">Available Quantity</th>
      <th scope="col">Recorder Level</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">5</th>
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
</body>
</html>	