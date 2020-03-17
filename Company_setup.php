<form method="POST" action="http://localhost/CI_Result_processor/crud/info">
    <div class="container">
        <legend class="bg-info text-light">
            <center><i class="fas fa-fw fa-briefcase"></i>Company Setup</center>
        </legend>
        <div class="card-body border border-primary">
            <fieldset>
                <!--name -->
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="name_id">Company Name :
                        <span class="text-danger font-weight-bold">*</span>
                    </label>
                    <div class="col-md-7">
                        <input type="text" id="company" class="form-control" name="company">
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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Company</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Unilever</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>RFL</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>PRAN</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>RUCHI</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>WALTON</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>RADHUNI</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>