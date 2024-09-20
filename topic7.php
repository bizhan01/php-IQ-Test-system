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
    <h1 style="background-color: #60c3e6; color: white; margin: 0 auto" class="font"><strong>Theory of Multiple Intelligences</strong></h1>
    <h4 style="color:blue">Jump to navigationJump to search</h4>
    <p class="font" style="font-size: 20px">
      The theory of multiple intelligences differentiates human intelligence into specific 'modalities', rather than seeing intelligence as dominated by a single general ability. Howard Gardner proposed this model in his 1983 book Frames of Mind: The Theory of Multiple Intelligences. According to the theory, an intelligence 'modality' must fulfill eight criteria:
    </p>
     <ol type="1" class="font" style="font-size: 20px">
       <li>potential for brain isolation by brain damage,</li>
       <li>place in evolutionary history,</li>
       <li>presence of core operations,</li>
       <li>susceptibility to encoding (symbolic expression),</li>
       <li>a distinct developmental progression,</li>
       <li>the existence of savants, prodigies and other exceptional people,</li>
       <li>support from experimental psychology, and</li>
       <li>support from psychometric findings.</li>
     </ol>
     <p class="font" style="font-size: 20px">
     Gardner proposed eight abilities that he held to meet these criteria:
    </p>
    <ol type="1" class="font" style="font-size: 20px">
      <li>musical-rhythmic</li>
      <li>visual-spatial</li>
      <li>verbal-linguistic</li>
      <li>logical-mathematical</li>
      <li>bodily-kinesthetic</li>
      <li>interpersonal</li>
      <li>intrapersonal, and</li>
      <li>naturalistic.</li>
    </ol>
    <p class="font" style="font-size: 20px">
      He later suggested that existential and moral intelligences may also be worthy of inclusion.[3]
  Although the distinction between intelligences has been set out in great detail, Gardner opposes the idea of labeling learners to a specific intelligence. Gardner maintains that his theory should "empower learners", not restrict them to one modality of learning.[4] According to Gardner, an intelligence is "a biopsychological potential to process information that can be activated in a cultural setting to solve problems or create products that are of value in a culture."[5] According to a 2006 study, each of the domains proposed by Gardner involves a blend of the general g factor, cognitive abilities other than g, and, in some cases, non-cognitive abilities or personality characteristics
.
   </p>
   <div class="col-md-12">
     <div class="col-md-6">
       <img src="image/img2/images.jpg" alt="" class="img img-responsive" />
     </div>
     <div class="col-md-6">
       <img src="image/img2/images_(1).jpg" alt="" class="img img-responsive" />
     </div>
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
