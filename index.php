<?php ob_start(); ?>

<?php include "database.php"; ?>

<?php
 //Get the total questions
 $query="select * from questions";
 //Get Results
 $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
 $total = $results->num_rows;
?>
<style media="screen">
  .bg{
    background-image: url("image/img2/iqz.gif");
    color: white;
    margin-top: -15px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
  }

</style>
    <div class="bg">
      <center class="img-responsive">
        <h2 class="font"> <strong>Explore Your Unique Intelligent </strong> </h2>
        <p class="font" style="font-size: 18px">
          Many, many people have just trouble chosen their field of studies,
           future career and exploring their unique talent. Very unfortunately
            even so many people who have bachelors or a master degree or have
            aged enough are still not sure if they are going the right way.
            We are committed to help people handle these types of dilemmas (uncertainties).
             It’s something beyond just a traditional IQ test. It does not
             only scale your IQ but classifies your intelligent too, based on
             different areas of human intelligent. The core of this project is
             quite like an IQ test but still we try to keep our uniqueness.
              I believe every single individual is unique and intelligent
              enough but let’s try to help one another to discover and explore
               their potential energies.
        </p>
	<h4 class="font"><strong>This Is a Multiple Choice Quize to Explore Your Unique Intelligent </strong></h4>

		<h4 class="font"><strong>Number of Questions: </strong><?php echo $total; ?></h4>
		<h4 class="font"><strong>Type: </strong>Multiple Choice</h4>
		<h4 class="font"><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</h4>

   <br>
	<a href="form.php" class="start"><button type="button" name="button" class="btn btn-success btn-lg font">Start Quiz</button></a>
</center>
</div>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
