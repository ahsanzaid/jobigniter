<?php require'header.php'; ?>




<div class="container">
    <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6 logincustom">
          <formzenctype="multipart/form-data" id="csignup">
          <div class="form-group">
            <label>Company Name</label>
            <input type="text" class="form-control" name="cname" placeholder="Company Name" id="cnamea" >
            </div>
            <div class="form-group">
            <label>HR-Email</label>
            <input type="text" class="form-control" name="email" placeholder="HR-Email" >
            </div>
            <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location" >
            </div>
            <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="city" placeholder="city" >
            </div>
            <div class="form-group">
            <label>Provience/State</label>
            <input type="text" class="form-control" name="provience" placeholder="Provience" >
            </div>
            <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" name="country" placeholder="Country" >
            </div>
            <div class="form-group">
            <label for="inputfile">Image</label>
            <input type="FILE"  id="inputfile" name="image" placeholder="image" >
            <p class="help-block">Upload Your Company Official Logo</p>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" >
              </div>


          <button type="submit" class="btn btn-primary" id="btncustom">Signup</button>
        </form>
        </div>
        <div class="col-xs-3"></div>
    </div>
</div>

 
<?php require'footer.html' ?>