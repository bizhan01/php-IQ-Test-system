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
      margin-top: 5px;
    }
  </style>
<?php ob_start(); ?>
<?php include "database.php"; ?>
<div>
    <h1 style="background-color: #60c3e6; color: white; margin: 0 auto" class="font"><strong>IQ History</strong></h1>
    <p class="font" style="font-size: 20px">
      Maturity of people have just trouble chosen their field of studies,
      future career and exploring their unique talent. Very unfortunately
      even so many people who have bachelors or a master degrees or have aged
      enough are still not sure if they are going the right way. This is because,
      we are living in a very complex world with a large number of population,
      communications, media and potential improvement of education and
      technologies. In addition, everyday creation of different skills made
      the life hard and makes us far away from pure thinking to really find
      out the right way, right career and right educational and business skills
     to survive. As long as, having some specific skills are the only way for
      having a prosperous future. In the other hand, it’s the biggest
       challenges which the citizens of this civilized world faced. <br></br>
    </p>
</div>
<div class="col-md-12">
  <div class="col-md-6">
    <img src="image/img2/th.jpg" alt="" class="img img-responsive" />
  </div>
  <div class="col-md-6">
    <img src="image/img2/cse-info.jpg" alt="" class="img img-responsive" />
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
     <div class="col-md-5" style="margin-left:-70px">
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
