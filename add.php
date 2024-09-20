<?php ob_start();
include "database.php";
?>
<?php
session_start();
if(!$_SESSION['check'])
{
  header("location:login.php");
}
?>
<?php
if (isset($_POST['submit'])){
   //Get Post variables
   $question_number = $_POST['question_number'];
   $question_text = $_POST['question_text'];
   $correct_choice = $_POST['correct_choice'];
   $choices = array();
   $choices[1] = $_POST['choice1'];
   $choices[2] = $_POST['choice2'];
   $choices[3] = $_POST['choice3'];
   $choices[4] = $_POST['choice4'];


   //Question query
   $query="insert into questions (question_number, question)
   	 values('$question_number','$question_text')";
   $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

   //VALIDATE INSERT
   if($insert_row){
      foreach($choices as $choice => $value){
        if($value != ''){
	       if($correct_choice == $choice){
	          $is_correct = 1;
	       } else {
	         $is_correct = 0;
	       }
              $query="insert into choices (question_number,is_correct,choice)
   	          values('$question_number','$is_correct','$value')";
              $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
	          if($insert_row){
	            continue;
	          }else {
	      		die("Error: (".$mysqli->errno.") ".$mysqli->eerror);
	    	}
        }
    }
   $msg="Question has been added";
}
}
//get total questions
$query = "select * from questions";
$questions = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total=$questions->num_rows;
$next=$total+1;
?>


      <main>
	<div class="container">
    <div class="col-lg-8">
      <div class="panel panel-info">
        <div class="panel panel-heading">
          <center> <h2 style="margin: 0px">Add A Question </h2> </center>
        </div>
        <div class="panel panel-body">

          <?php
              if(isset($msg)) {
                 echo "<p>".$msg."</p>";
          }
          ?>
          <form method="post" action="add.php">
              <p>
         <label>Question Number</label>
         <input type="number" value="<?php echo $next; ?>" name="question_number" />
          </p>
              <p>
         <label>Question</label>
         <input type="text" name="question_text" class="form form-control"/>
          </p>
              <p>
         <label>Choice #1: </label>
         <input type="text" name="choice1" class="form form-control"/>
          </p>
              <p>
         <label>Choice #2: </label>
         <input type="text" name="choice2" class="form form-control" />
          </p>
              <p>
         <label>Choice #3: </label>
         <input type="text" name="choice3" class="form form-control"/>
          </p>
              <p>
         <label>Choice #4: </label>
         <input type="text" name="choice4" class="form form-control" />
          </p>

         <label>Correct choice number </label>
         <input type="number" name="correct_choice" class="form form-control" />
          </p>
          <p>
         <input type="submit" name="submit" value="Submit" class="btn btn-success" />
          </p>
          </form>
        </div>
      </div>
    </div>


	</div>
      </main>


            		<?php
            		$data=ob_get_contents();
            		ob_end_clean();
            		require_once("masterpage.php");
            		 ?>
