
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IQ+</title>
    <link rel="shortcat icon" type="image/x-ion" href="image/logo.PNG">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
      <header >
        <img src="image/header.png" alt="" width="100%" class="img img-responsive"/>
      </header>

      <!--Start of Nav Code -->
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header" style="background-color: #00b0f0">
          <button style="background-color: #00b0f0" type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a> </div>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse" style="background-color: #00b0f0">
          <ul class="nav navbar-nav" id="mainNav">
            <li  id="firstLink"><a href="index.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">Home</a></li>
            <li><a href="news.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">News</a></li>
            <li><a href="events.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">Events</a></li>
            <li><a href="fees.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">Fees</a></li>
            <li><a href="management.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">Management</a></li>
            <li><a href="contact.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">Contact Us</a></li>
            <li><a href="about.php" class="scroll-link" style="font-family:Baskerville Old Face; color:white; font-size:20px">About Us</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse-->
      </nav>
      <!--End of Nav Code-->

        <!--Aside Code Start-->
        <aside class="col-lg-3 col-md-3 col-sm-6">
            <ul>
              <a href="topic1.php"><li>Our Vision</li></a>
              <a href="topic2.php"><li>What is IQ?</li></a>
              <a href="topic3.php"><li>How Scale IQ?</li></a>
              <a href="topic4.php"><li>History of IQ</li></a>
              <a href="topic5.php"><li>9 IQ Types</li></a>
              <a href="topic6.php"><li>Intelligent</li></a>
              <a href="topic7.php"><li>Multiple-Intelligences</li></a>
            </ul>
        </aside>
        <!--End of Aside Code-->

  <!--Start of section Code-->
      <section class="col-lg-9 col-md-9 col-sm-6">
        <?php
        if(isset($data)){
          echo $data;
        }
        else {

        }
         ?>
      </section>
      <!--End of section Code-->

      <!--Start of footer Code-->
      <footer  class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <center>
          <img src="image/logo.png" alt="" class="img img-responsive" />
          <h3 class="font"> Copyright &copy; IQ+</h3>
        </center>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <center>
          <h3 class="font"> Follow Us</h3>

            <ul style="margin-left:-43px;  margin-top: 30px;" >
                <a href="#"> <li><span class="fa fa-facebook-square"></span></li> </a>
                <a href="#"> <li> <span class="fa fa-twitter-square"></span></li></a>
                <a href="#"> <li><span class="fa fa-youtube-square"></span></li> </a>
                <a href="#"> <li><span class="fa fa-google-plus-square"></span></li> </a>
                <a href="#"> <li><span class="fa fa-pinterest-square"></span></li> </a>
            </ul>
        </center>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:10px">
          <center>
          <form class="" action="" method="post">
            <div class="form-group row">
              <input type="text" name="fullName" required value="" placeholder="Your Full Name" class="form-control"> <br>
              <input type="email" name="email" required value="" placeholder="Your E-mail Address " class="form-control"> <br>
              <input type="submit" name="submit" value="subscribe"  class="btn btn-success btn-md"> <br>

            </div>
          </form>
        </center>
        </div>
      </footer>
      <!--End of footer Code-->

</div>
  </body>

</html>
