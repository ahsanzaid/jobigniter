<?php require'header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6 logincustom">
          <form id="signinform">
          <div class="form-group">
        <label for="sel1">Select Account</label>
        <select class="form-control" id="account">
        <option>JobSeeker</option>
        <option>CompanyAccount</option>
        </select>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Email" required id="name">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required id="password">
              </div>


          <button type="submit" class="btn btn-primary" id="signinsubmit">Login</button>
        </form>
        </div>
        <div class="col-xs-3"></div>
    </div>
</div>


<?php include('footer.html'); ?>
