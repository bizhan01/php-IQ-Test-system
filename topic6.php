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
    <h1 style="background-color: #60c3e6; color: white; margin: 0 auto" class="font"><strong>Human Intelligent</strong></h1>
    <p class="font" style="font-size: 20px">
      One major criticism of the theory is that it is ad hoc: that Gardner is not expanding the definition of the word "intelligence", but rather denies the existence of intelligence as traditionally understood, and instead uses the word "intelligence" where other people have traditionally used words like "ability" and "aptitude". This practice has been criticized by Robert J. Sternberg,[24][25] Eysenck,[26] and Scarr.[27] White (2006) points out that Gardner's selection and application of criteria for his "intelligences" is subjective and arbitrary, and that a different researcher would likely have come up with different criteria.[28]
Defenders of MI theory argue that the traditional definition of intelligence is too narrow, and thus a broader definition more accurately reflects the differing ways in which humans think and learn.[29]
Some criticisms arise from the fact that Gardner has not provided a test of his multiple intelligences. He originally defined it as the ability to solve problems that have value in at least one culture, or as something that a student is interested in. He then added a disclaimer that he has no fixed definition, and his classification is more of an artistic judgment than fact:

     <br></br>
    </p>
</div>
<div class="col-md-12">
  <div class="col-md-6">
    <img src="image/img2/mind.jpg" alt="" class="img img-responsive" />
  </div>
  <div class="col-md-6">
    <img src="image/img2/T1uU2.jpg" alt="" class="img img-responsive" />
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
