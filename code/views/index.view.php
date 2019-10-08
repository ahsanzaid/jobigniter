<?php require'header.php'; ?>
    <!-- Header Section End -->

      <div class="search-container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Find the job that fits your life</h1><br><h2>More than <strong>12,000</strong> jobs are waiting to Kickstart your career!</h2>
              <div class="content">
                <form method="GET" action="/job/search">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="text" name="keyword" placeholder="job title / keywords / company name" required>
                        <i class="ti-time"></i>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="text" name="city"placeholder="city / province" required>
                        <i class="ti-location-pin"></i>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="search-category-container">
                        <label class="styled-select">
                          <select class="dropdown-product selectpicker" name="skill">
                            <?php foreach ($categories as $trend) : ?>
                            <option><?php echo $trend->skill; ?></option>
                            <?php endforeach ?>
                            
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-1 col-sm-6">
                      <button type="submit" class="btn btn-search-icon"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="popular-jobs">
                <b>Popular Keywords: </b>
                <a href="#">Web Design</a>
                <a href="#">Manager</a>
                <a href="#">Programming</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->
    </div>

    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Trending Jobs</h2>
        <div class="row">
          <div class="col-md-12">
            <?php foreach ($trendjobs as $trend) :?>
              
              <div class="job-list">
                <div class="thumb">
                  <a href="/job/jobdetails?job=<?= $trend->jid ?>"><img src="<?= $trend->img ?>" alt="" height="100" width="100"></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="/job/jobdetails?job=<?= $trend->jid ?>"><?php echo $trend->jname; ?></a><span class="full-time"><?php echo $trend->type; ?></span></h4>
                  <p><?php echo $trend->jdescrp; ?></p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-brush"></i><?php echo $trend->skill; ?></a></span>
                        <span><i class="ti-location-pin"></i><?php echo $trend->location.' , '.$trend->city.' , '.$trend->provience.' , '.$trend->country ; ?></span>
                       
                      </div>
                    </div>
                    <div class="pull-right">
                      <!-- <div class="icon">
                        <i class="ti-heart"></i>
                      </div> -->
                      <a href="/job/jobdetails?job=<?= $trend->jid ?>" class="btn btn-common btn-rm">More Detail</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach  ?>
            </div>

          <div class="col-md-12">
            <!-- <div class="showing pull-left">
              <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
            </div> -->
            <!-- <ul class="pagination pull-right">
              <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Find Job Section End -->



    <!-- Featured Jobs Section Start -->
    <!-- <section class="featured-jobs section">
      <div class="container">
        <h2 class="section-title">
          Featured Jobs
        </h2>
        <div class="row">
          <?php for ($i=0; $i < 6 ; $i++) {
            echo '<div class="col-md-4 col-sm-6 col-xs-12">
              <div class="featured-item">
                <div class="featured-wrap">
                  <div class="featured-inner">
                    <figure class="item-thumb">
                      <a class="hover-effect" href="job-page.html">
                        <img src="public/assets/img/features/img-1.jpg" alt="">
                      </a>
                    </figure>
                    <div class="item-body">
                      <h3 class="job-title"><a href="job-page.html">Graphic Designer</a></h3>
                      <div class="adderess"><i class="ti-location-pin"></i> Dallas, United States</div>
                    </div>
                  </div>
                </div>
                <div class="item-foot">
                  <span><i class="ti-calendar"></i> 4 months ago</span>
                  <span><i class="ti-time"></i> Full Time</span>
                  <div class="view-iocn">
                    <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>';
          } ?>

        </div>
      </div>
    </section> -->
    <!-- Featured Jobs Section End -->




    <!-- Clients Section -->
    <section class="clients section">
      <div class="container">
        <h2 class="section-title">
          Clients & Partners
        </h2>
        <div class="row">
          <div id="clients-scroller">
           <div class="items">
              <img src="public/assets/img/clients/daraz.pk.png" alt="">
            </div>
            
            <div class="items">
              <img src="public/assets/img/clients/10pearls.png" alt="">
            </div>
            <div class="items">
              <img src="public/assets/img/clients/macter.png" alt="">
            </div>
            <div class="items">
              <img src="public/assets/img/clients/venturedive.png" alt="">
            </div>
            <div class="items">
              <img src="public/assets/img/clients/qordata.png" alt="">
            </div>
            <div class="items">
              <img src="public/assets/img/clients/merck.png" alt="">
            </div>
            <div class="items">
              <img src="public/assets/img/clients/google.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Client Section End -->

     <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-briefcase"></i>
              </div>
              <div class="desc">
                <h2>Jobs</h2>
                <h1 class="counter">12050</h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-user"></i>
              </div>
              <div class="desc">
                <h2>Members</h2>
                <h1 class="counter">10890</h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-write"></i>
              </div>
              <div class="desc">
                <h2>Resume</h2>
                <h1 class="counter">700</h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <div class="desc">
                <h2>Company</h2>
                <h1 class="counter">9050</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->
<?php require 'footer.html'; ?>
