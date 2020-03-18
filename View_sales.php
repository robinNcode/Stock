
	<form method="POST" action="http://localhost/CI_Result_processor/crud/primary">
    <div class="container">
      <legend class="bg-primary text-light"><center><i class="fas fa-fw fa-briefcase"></i>View Sales Between Two Dates</center></legend>
  <div class="card-body border border-primary">
          <fieldset>
          <!--From Date -->
     <div class="container">
    <div class="row">
      <label class="col-md-3 col-form-label" for="name_id">From Date :</label>
        <div class='col-sm-7'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='date' class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
             <!--To Date -->
     <div class="container">
    <div class="row">
      <label class="col-md-3 col-form-label" for="name_id">To Date :</label>
        <div class='col-sm-7'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='date' class="form-control">
                </div>
            </div>
        </div>
        
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
      <th scope="col">Serial No</th>
      <th scope="col">Item </th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
  </tbody>
</table>
</div>
</div>
</form>
