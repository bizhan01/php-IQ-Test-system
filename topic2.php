<style media="screen">
#line{
  height: 50px;
  margin-top: 5px;
  margin-bottom: 5px;
}
  ul a li {
    list-style-type: none;
    padding: 3px;
    font-size: 20px;
    margin-left: 15px;
  }
  #option a li{
    display: inline;
  }
    #input{
      margin-top: 10px;
    }
  </style>
<?php ob_start(); ?>
<?php include "database.php"; ?>
<div>
    <h1 style="background-color: #60c3e6; color: white; margin: 0 auto" class="font"><strong>What Is IQ?</strong></h1>
    <p class="font" style="font-size: 20px">
      An intelligence quotient (IQ) is a total score derived from several standardized tests designed to assess human intelligence. The abbreviation "IQ" was coined by the psychologist William Stern for the German term Intelligenzquotient, his term for a scoring method for intelligence tests at University of Breslau he advocated in a 1912 book.[1] Historically, IQ is a score obtained by dividing a person's mental age score, obtained by administering an intelligence test, by the person's chronological age, both expressed in terms of years and months. The resulting fraction is multiplied by 100 to obtain the IQ score.[2] When current IQ tests were developed, the median raw score of the norming sample is defined as IQ 100 and scores each standard deviation (SD) up or down are defined as 15 IQ points greater or less,[3] although this was not always so historically. By this definition, approximately two-thirds of the population scores are between IQ 85 and IQ 115. About 2.5 percent of the population scores above 130, and 2.5 percent below 70.[4][5].
       <br></br>
       Scores from intelligence tests are estimates of intelligence. Unlike, for example, distance and mass, a concrete measure of intelligence cannot be achieved given the abstract nature of the concept of "intelligence".[6] IQ scores have been shown to be associated with such factors as morbidity and mortality,[7][8] parental social status,[9] and, to a substantial degree, biological parental IQ. While the heritability of IQ has been investigated for nearly a century, there is still debate about the significance of heritability estimates[10][11] and the mechanisms of inheritance.[12]
        <br></br>
        IQ scores are used for educational placement, assessment of intellectual disability, and evaluating job applicants. Even when students improve their scores on standardized tests, they do not always improve their cognitive abilities, such as memory, attention and speed.[13] In research contexts they have been studied as predictors of job performance, and income. They are also used to study distributions of psychometric intelligence in populations and the correlations between it and other variables. Raw scores on IQ tests for many populations have been rising at an average rate that scales to three IQ points per decade since the early 20th century, a phenomenon called the Flynn effect. Investigation of different patterns of increases in subtest scores can also inform current research on human intelligence.
    </p>
</div>
<div class="col-md-12">
  <div class="col-md-6">
    <img src="image/img2/iq.jpg" alt="" class="img img-responsive" />
  </div>
  <div class="col-md-6">
    <img src="image/img2/iq2.jpg" alt="" class="img img-responsive" />
  </div>
</div>
 <div id="line"class="col-md-12">
   <form class=""  method="post">
     <div class="col-md-8">
       <div class="form-group row">
          <input type="text" id="input" name="newComments" required placeholder="Please Leave a Comment Here"class="form-control">
         </div>
        </div>
      </form>
     <div class="col-md-4" style="margin-left:-70px">
       <ul id="option">
         <a href="#"> <li style="color:#00b0f0"> <span class="fa fa-thumbs-o-up"></span></li></a>
         <a href="#"> <li style="color:#00b0f0"> <span class="fa fa-thumbs-o-down"></span></li></a>
         <a href="#"> <li style="color:#00b0f0"> <span class="fa fa-mail-forward"></span></li></a>
       </ul>
     </div>
 </div>
<?php
     if(isset($_POST["newComments"])){
          $newComments=$_POST["newComments"];

           $q="INSERT INTO `comments` (`id`, `newComments`) VALUES ('', '$newComments')";

          $insert=mysqli_query($mysqli, $q);
          if($insert){
            header("#");
          }
          else {
            echo "Not Inserted";
          }
        }
         ?>
<?php
$select="select * from comments order by id desc";
$q=mysqli_query($mysqli, $select);
foreach ($q as $show) {?>

<div id="post" class="col-lg-12">
  <tr>
    <td class="pre"> <?php echo $show ["newComments"] ?></td>
  </tr>
</div>
<?php } ?>
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
