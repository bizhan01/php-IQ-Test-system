<?php ob_start(); ?>
<?php include "database.php"; ?>

<div>
    <h1 style="background-color: #60c3e6; color: white; margin:0px" class="font"><strong>IQ+ Board of Management</strong></h1>
<section id="team" class="page-section">
  <div class="container" style="margin-left:-30px">
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- Team Member -->
          <div class="team-member pDark">
            <!-- Image Hover Block -->
            <div class="member-img">
              <!-- Image  -->
              <img class="img-responsive" src="images/photo-1.jpeg" alt=""> </div>
            <!-- Member Details -->
            <div class="team-title">
			<h4>Shekib Kajabi</h4>
            <!-- Designation -->
            <span class="pos">Boss</span>
			</div>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- Team Member -->
          <div class="team-member pDark">
            <!-- Image Hover Block -->
            <div class="member-img">
              <!-- Image  -->
              <img class="img-responsive" src="images/photo-2.jpg"  alt=""> </div>
            <!-- Member Details -->
            <h4>Rokhshana Nazari</h4>
            <!-- Designation -->
            <span class="pos">Director</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-7 col-xs-12">
          <!-- Team Member -->
          <div class="team-member pDark">
            <!-- Image Hover Block -->
            <div class="member-img">
              <!-- Image  -->
              <img class="img-responsive" src="images/photo-3.jpg" alt="" > </div>
            <!-- Member Details -->
            <h4>Sakina Hussaini</h4>
            <!-- Designation -->
            <span class="pos">HR Manager</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<center style="margin-left: 180px">
<section id="team" class="page-section">
  <div class="container" style="margin-left:-30px">
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- Team Member -->
          <div class="team-member pDark">
            <!-- Image Hover Block -->
            <div class="member-img">
              <!-- Image  -->
              <img class="img-responsive" src="images/photo-6.jpg" alt=""> </div>
            <!-- Member Details -->
            <div class="team-title">
			<h4>Rahmatullah Bizhan</h4>
            <!-- Designation -->
            <span class="pos">Adviser</span>
			</div>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- Team Member -->
          <div class="team-member pDark">
            <!-- Image Hover Block -->
            <div class="member-img">
              <!-- Image  -->
              <img class="img-responsive" src="images/photo-5.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>Dina Jan</h4>
            <!-- Designation -->
            <span class="pos">Finance Manager</span>
            <div class="team-socials"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</center>
</div>
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
