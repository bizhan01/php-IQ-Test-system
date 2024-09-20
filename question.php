<?php include "database.php"; ?>
<?php session_start(); ?>
<style media="screen">
	ul li {
		list-style-type: none;
	}
</style>
<?php ob_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>


      <div class="container col-md-12">
        <div class="current"> <h2 class="font"><strong> Question <?php echo $number; ?> of <?php echo $total; ?></strong></h2></div>
	<p class="question, font " style="font-size: 25px">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php" style="font-size: 20px">
	      <ul class="choices, font">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
	      <input type="submit" value="Submit"  class="btn btn-info"/>
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>

		<?php
		$data=ob_get_contents();
		ob_end_clean();
		require_once("masterpage.php");
		 ?>
