<?php include('header.php') ?>



      <!-- Job Browse Section Start -->
      <section class="job-browse section">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-8">
            <?php foreach ($jobs as $job) :?>
              
              <div class="job-list">
                <div class="thumb">
                  <a href="/job/jobdetails?job=<?= $job->jid ?>"><img src="<?= $job->img ?>" alt="" height="100" width="100"></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="/job/jobdetails?job=<?= $job->jid ?>"><?php echo $job->jname; ?></a><span class="full-time"><?php echo $job->type; ?></span></h4>
                  <p><?php echo $job->jdescrp; ?></p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-brush"></i><?php echo $job->skill; ?></a></span>
                        <span><i class="ti-location-pin"></i><?php echo $job->location.' , '.$job->city.' , '.$job->provience.' , '.$job->country ; ?></span>
                       
                      </div>
                    </div>
                    <div class="pull-right">
                      <!-- <div class="icon">
                        <i class="ti-heart"></i>
                      </div> -->
                      <a href="/job/jobdetails?job=<?= $job->jid ?>" class="btn btn-common btn-rm">More Detail</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach  ?>
              <!-- Start Pagination -->
              <!-- <ul class="pagination">
                <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                    <li><a href="#">'.$i.'</a></li>

                <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
              </ul> -->
              <!-- End Pagination -->
            </div>
            <div class="col-md-3 col-sm-4">
              <aside>
                <div class="sidebar">
                  <div class="inner-box">
                    <h3>Categories</h3>
                    <ul class="cat-list">
                      <?php for ($i=0; $i < 5 ; $i++) {
                      echo '<li>
                          <a href="#">Finance <span class="num-posts">4,287 Jobs</span></a>
                        </li>';
                      } ?>

                    </ul>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
      <!-- Job Browse Section End -->
<?php include('footer.html') ?>
