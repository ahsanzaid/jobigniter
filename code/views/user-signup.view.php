<?php require'header.php'; ?>




<div class="container">
    <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6 logincustom">
          <form method="POST" action="/job/usignup_submit" enctype="multipart/form-data">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="First Name" id="cnamea" required>
            </div>
            <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="E-Mail" required>
            </div>
            <div class="form-group">
            <label>Phone</label>
            <input type="phone" class="form-control" name="phone" placeholder="Phone" required>
            </div>
            <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="city" placeholder="City" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>


          <button type="submit" class="btn btn-primary" id="btncustom">Signup</button>
        </form>
        </div>
        <div class="col-xs-3"></div>
    </div>
</div>



<?php require'footer.html' ?>