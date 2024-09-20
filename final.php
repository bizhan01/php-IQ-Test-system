 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
//	$shouts = mysqli_query($con,$query);

 ?>


      <main>
	<center>
	     <h1 class="font" style="margin:0px">You Are Done!</h1>
	     <h3 class="font" style="margin:0px">Congrats! You Have Completed the Test</h3>
       <div class="alert alert-success" style="margin-top:0px">
            <h2 class="font" style="margin:0px">Final Socre: <?php echo $_SESSION['score']; ?></h2>
          </div>
          <?php
           $favcolor = $_SESSION['score'];
           switch ($favcolor){
                case '1':
                  ?>
                    <center> <img src="image/img2/art.jpg" alt="" class="img img-responsive" />
                     <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study ART"; ?></h1> </center>
                   <?php}?>
                   <?php
                     break;
                 case "2":
                 ?>
                   <center> <img src="image/img2/music.jpg" alt="" class="img img-responsive" />
                    <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study MUSICIAN"; ?></h1> </center>
                  <?php}?>
                  <?php
                     break;
                 case "3":
                 ?>
                   <center> <img src="image/img2/spea.jpg" alt="" class="img img-responsive" />
                    <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study MOTIVATION SPEACKING"; ?></h1> </center>
                  <?php}?>
                  <?php
                     break;
                 case "4":
                 ?>
                   <center> <img src="image/img2/soc.png" alt="" class="img img-responsive" />
                    <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study SOCAIL STUDIES"; ?></h1> </center>
                  <?php}?>
                  <?php
                     break;
                 case "5":
                 ?>
                   <center> <img src="image/img2/jur.jpg" alt="" class="img img-responsive" />
                    <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study REPORTING"; ?></h1> </center>
                  <?php}?>
                  <?php
                     break;
                 case "6":
                 ?>
                   <center> <img src="image/img2/eco.jpg" alt="" class="img img-responsive" />
                    <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study ECONOMY"; ?></h1> </center>
                  <?php}?>
                  <?php
                     break;
                 case '7':
                 ?>
                   <center> <img src="image/img2/po.jpg" alt="" class="img img-responsive" />
                    <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study POLICY"; ?></h1> </center>
                  <?php}?>
                  <?php
                      break;
                  case "8":
                    ?>
                        <center> <img src="image/img2/law.jpg" alt="" class="img img-responsive" />
                         <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study LAW"; ?></h1> </center>
                       <?php}?>
                       <?php
                     break;
                  case "9":
                  ?>
                    <center> <img src="image/img2/md.jpg" alt="" class="img img-responsive" />
                     <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study MEDICINE"; ?></h1> </center>
                   <?php}?>
                   <?php
                      break;
                  case "10":
                  ?>
                    <center> <img src="image/img2/eng.jpg" alt="" class="img img-responsive" />
                     <h1 style="margin:0px" class="font"><?php echo "IQ+ Sugests You, Study ENGINEERING "; ?></h1> </center>
                   <?php}?>
                   <?php
                      break;
                  default:
                  ?>
                    <center> <img src="image/img2/hope.jpg" alt="" class="img img-responsive" />
                     <h2 style="margin:0px" class="font"><?php echo "IQ+ Suggests You Nothing Now, Please Take the Test Again! "; ?></h2> </center>
                   <?php}?>
                   <?php
                     break;
           }
           ?>

	     <a href="question.php?n=1" class="start"><button type="button" name="button" class="btn btn-success btn-lg">Take Test Again</button></a>
	     <?php session_destroy(); ?>
	</center>
      </main>



      		<?php
      		$data=ob_get_contents();
      		ob_end_clean();
      		require_once("masterpage.php");
      		 ?>
