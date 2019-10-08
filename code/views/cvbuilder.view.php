<?php include('header.php'); ?>

 <script type="text/javascript">
// $(document).ready(function(){
//   $("#myform").submit(function(){
//     var cvdata = $("#orignalcv").html();
//     $("body").append(cvdata);
//     return false;
//   });
// });

 </script>
<div class="container">
    <div class="row">
         <!--CV Form-->
        <div class="col-xs-6">
          <div class="cvform">
            <h2>CV-Form</h2>
  <section id="cvform">
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Image Upload</label>
      <input type="file" class="form-control" name="image" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
      <label>Job Title</label>
      <input type="text" class="form-control" name="jobtitle" placeholder="Enter Job Title" id="jobtitle">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email">
        </div>
        <div class="form-group">
          <label>Website</label>
          <input type="text" class="form-control" name="website" placeholder="Enter Website" id="site">
          </div>
          <div class="form-group">
            <label>Phone No</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone no" id="phone">
            </div>
            <div class="form-group">
              <label>Personal Profile</label>
              <textarea type="" class="form-control" name="fullname" row="8" placeholder="Personal Profile / Objective" id="personalp"></textarea>
              </div>

              <div class="form-group">
                <label>Work Experience</label>
                <input type="text" class="form-control" name="jobtitle" placeholder="Job Title" id="workjt">
                <input type="text" class="form-control" name="company" placeholder="Company" id="workc">
                <input type="date" class="form-control" name="fdate" placeholder="From Date" id="workf">
                <input type="date" class="form-control" name="tdate" placeholder="To Date" id="workt">
                <textarea type="text" class="form-control" name="fullname" row="8" placeholder="Job Details" id="workjd"></textarea>
                <button type="button" class="btn btn-info" name="addwork" id="workbtn"><span class="glyphicon glyphicon-plus"></span> Add Experience</button>
                </div>
                <div class="form-group">
                  <label>Key Skills</label>
                  <input type="text" class="form-control" name="keyskills" placeholder="Key Skills" id="skill">
                  <button type="button" class="btn btn-info" name="addskills" id="skillbtn"><span class="glyphicon glyphicon-plus" ></span> Add Skills</button>
                  </div>
                  <div class="form-group">
                    <label>Education</label>
                    <input type="text" class="form-control" name="inname" placeholder="University / Collage" id="edu1">
                    <input type="text" class="form-control" name="inname" placeholder="Qualification" id="edu2">
                    <textarea type="text" class="form-control" name="details" row="8" placeholder="Job Details" id="edu3"></textarea>
                    <button type="button" class="btn btn-info" name="addedu" id="edu4"><span class="glyphicon glyphicon-plus"></span> Add Education</button>
                  </div>
                  <button type="submit" class="btn btn-primary" id="submitcv">Build CV</button>
</section>

</div>
        </div>
        <!--CV-->
        <div class="col-xs-6" id="orignalcv">
          <div id="cv" class="instaFade">
          	<div class="mainDetails">
          		
          		<div id="name">
          			<h1 class="quickFade delayTwo" id="cvfullname">Full Name</h1>
          			<h2 class="quickFade delayThree" id="cvjobtitle">Job Title</h2>
          		</div>

          		<div id="contactDetails" class="quickFade delayFour">
          			<ul>
          				<li>e: <a href="mailto:gibraltersoft@gmail.com" target="_blank" id="cvemail">yourmail@mailbox.com</a></li>
          				<li>w: <a href="http://www.gibraltarsoft.com" id="cvsite">www.yourdomain.com</a></li>
          				<li id="cvphone">m: 01234567890</li>
          			</ul>
          		</div>
          		<div class="clear"></div>
          	</div>

          	<div id="mainArea" class="quickFade delayFive">
          		<section>
          			<article>
          				<div class="sectionTitle">
          					<h1>Personal Profile</h1>
          				</div>

          				<div class="sectionContent">
          					<p id="cvpersonalp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
          				</div>
          			</article>
          			<div class="clear"></div>
          		</section>


          		<section>
          			<div class="sectionTitle">
          				<h1>Work Experience</h1>
          			</div>

          			<div class="sectionContent" id="workex">
          				<article id="xwork">
          					<h2 id="cvworkjt">Job Title at Company</h2>
          					<p class="subDetails" id="cvworkdate">April 2011 - Present</p>
          					<p id="cvworkjd">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
          				</article>

          			</div>
          			<div class="clear"></div>
          		</section>


          		<section>
          			<div class="sectionTitle">
          				<h1>Key Skills</h1>
          			</div>

          			<div class="sectionContent">
          				<ul class="keySkills" id="cvskill">
          				 <li id="xcvskill">A Key Skill</li>

          				</ul>
          			</div>
          			<div class="clear"></div>
          		</section>


          		<section>
          			<div class="sectionTitle">
          				<h1>Education</h1>
          			</div>

          			<div class="sectionContent" id="cvedu">
          				<article id="xcvedu">
          					<h2>College/University</h2>
          					<p class="subDetails">Qualification</p>
          					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
          				</article>
          			</div>
          			<div class="clear"></div>
          		</section>

          	</div>
          </div>
         


        </div>
    </div>
</div>




<?php include('footer.html'); ?>
