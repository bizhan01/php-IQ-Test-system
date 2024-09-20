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
    <h1 style="background-color: #60c3e6; color: white; margin: 0 auto" class="font"><strong>How Scale IQ?</strong></h1>
    <pre class="font" style="font-size: 20px; background-color:white">
      What is the IQ Scale?
________________________________________
The IQ Scale is a total score that is derived from certain standardized tests that are designed to assess the human intelligence.
IQ Scale Range
________________________________________
Your IQ is a measure of your intelligence. The higher the IQ the better. Your IQ is usually measured over a general IQ scale range and the standard IQ range is as follows:
140 and over : If you have an IQ range of 140 and over, it means you are a genius or almost genius.
120 - 139 : With an IQ of 120 to 139, it means you have very superior intelligence and your intelligence is better than most. A superior intelligence means that your intelligence is better than most people but not as high as those with an IQ of 140.
110 - 119 : On the other hand, if you have an IQ of 110-119, it means you have a superior intelligence and that means that your intelligence is on middle ground- which means that it is high but not higher than most.
90 - 109 : When you have an intelligence of 90-109, it means that you have an intelligence of normal or average people. Normal thinking means that you are less intelligent and generally have a slower thinking. So people who cannot get to the solution or are slower in thinking will mean that they have normal intelligence.
80 - 89 : On the other hand, if you have an intelligence of 80-89, that means you are a dull person. A dull person or boring person means that they generally tend to indulge in things that are too enjoyable. Dull people tend not to indulge in things that are too demanding.
Below 80 : Give it another try :) maybe you will see the logic behind some questions after several tries. Also make sure you didn't leave some questions unanswered, leaving a question unanswered will give you a 0 point for that question.
Normal Distribution & IQ Scores
________________________________________
The properties of the normal distribution apply to IQ scores:
50% of IQ scores fall between 90 and 110
70% of IQ scores fall between 85 and 115
95% of IQ scores fall between 70 and 130
99.5% of IQ scores fall between 60 and 140




IQ scale
What does the IQ scale measure? What is an average score? How high can an IQ be? Here are some answers to these and other questions.
First of all, the concept of IQ was developed by either the German psychologist and philosopher Wilhelm Stern in 1912, or by Lewis Terman in 1916, depending on which sources you consult. Intelligence testing was first done on a large scale before either of these dates. In 1904 psychologist Alfred Binet was commissioned by the French government to create a testing system to differentiate intellectually normal children from those who were inferior.
From Binet's work the IQ scale called the "Binet Scale," (and later the "Simon-Binet Scale") was developed. Sometime later, "intelligence quotient," or "IQ," entered our vocabulary. Lewis M. Terman revised the Simon-Binet IQ Scale, and in 1916 published the Stanford Revision of the Binet-Simon Scale of Intelligence (also known as the Stanford-Binet). The following scale resulted for classifying IQ scores:
IQ Scale
Over 140 - Genius or almost genius
120 - 140 - Very superior intelligence
110 - 119 - Superior intelligence
90 - 109 - Average or normal intelligence
80 - 89 - Dullness
70 - 79 - Borderline deficiency in intelligence
Under 70 - Feeble-mindedness
Normal Distribution of IQ Scores
50% of IQ scores fall between 90 and 110
70% of IQ scores fall between 85 and 115
95% of IQ scores fall between 70 and 130
99.5% of IQ scores fall between 60 and 140
Low IQ & Mental Retardation
An IQ under 70 is considered as "mental retardation" or limited mental ability. 5% of the population falls below 70 on IQ tests. The severity of the mental retardation is commonly broken into 4 levels:
50-70 - Mild mental retardation (85%)
35-50 - Moderate mental retardation (10%)
20-35 - Severe mental retardation (4%)
IQ < 20 - Profound mental retardation (1%)
High IQ & Genius IQ
Genius or near-genius IQ is considered to start around 140 to 145. Less than 1/4 of 1 percent fall into this category. Here are some common designations on the IQ scale:
115-124 - Above average
125-134 - Gifted
135-144 - Very gifted
145-164 - Genius
165-179 - High genius
180-200 - Highest genius


    </pre>

</div>
<div class="col-md-12">
  <div class="col-md-6">
    <img src="image/img2/home-graph.jpg" alt="" class="img img-responsive" />
  </div>
  <div class="col-md-6">
    <img src="image/img2/blog-2.jpg" alt="" class="img img-responsive" />
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
