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
    <h1 style="background-color: #60c3e6; color: white; margin: 0 auto" class="font"><strong>9 IQ Types</strong></h1>
    <pre class="font" style="font-size: 20px">
                                       The 9 Types of Intelligence
Here is an overview of the multiple intelligences theory, summarized by ASCD [2]:

1. Naturalist Intelligence
Naturalist intelligence designates the human ability to discriminate among living things (plants, animals) as well as sensitivity to other features of the natural world (clouds, rock configurations). This ability was clearly of value in our evolutionary past as hunters, gatherers, and farmers; it continues to be central in such roles as botanist or chef. It is also speculated that much of our consumer society exploits the naturalist intelligences, which can be mobilized in the discrimination among cars, sneakers, kinds of makeup, and the like.

2. Musical Intelligence
Musical intelligence is the capacity to discern pitch, rhythm, timbre, and tone. This intelligence enables us to recognize, create, reproduce, and reflect on music, as demonstrated by composers, conductors, musicians, vocalist, and sensitive listeners. Interestingly, there is often an affective connection between music and the emotions; and mathematical and musical intelligences may share common thinking processes. Young adults with this kind of intelligence are usually singing or drumming to themselves. They are usually quite aware of sounds others may miss.

3. Logical-Mathematical Intelligence
Logical-mathematical intelligence is the ability to calculate, quantify, consider propositions and hypotheses, and carry out complete mathematical operations. It enables us to perceive relationships and connections and to use abstract, symbolic thought; sequential reasoning skills; and inductive and deductive thinking patterns. Logical intelligence is usually well developed in mathematicians, scientists, and detectives. Young adults with lots of logical intelligence are interested in patterns, categories, and relationships. They are drawn to arithmetic problems, strategy games and experiments.

4. Existential Intelligence
Sensitivity and capacity to tackle deep questions about human existence, such as the meaning of life, why we die, and how did we get here.

5. Interpersonal Intelligence
Interpersonal intelligence is the ability to understand and interact effectively with others. It involves effective verbal and nonverbal communication, the ability to note distinctions among others, sensitivity to the moods and temperaments of others, and the ability to entertain multiple perspectives. Teachers, social workers, actors, and politicians all exhibit interpersonal intelligence. Young adults with this kind of intelligence are leaders among their peers, are good at communicating, and seem to understand others’ feelings and motives.

6. Bodily-Kinesthetic Intelligence
Bodily kinesthetic intelligence is the capacity to manipulate objects and use a variety of physical skills. This intelligence also involves a sense of timing and the perfection of skills through mind–body union. Athletes, dancers, surgeons, and crafts people exhibit well-developed bodily kinesthetic intelligence.

7. Linguistic Intelligence
Linguistic intelligence is the ability to think in words and to use language to express and appreciate complex meanings. Linguistic intelligence allows us to understand the order and meaning of words and to apply meta-linguistic skills to reflect on our use of language. Linguistic intelligence is the most widely shared human competence and is evident in poets, novelists, journalists, and effective public speakers. Young adults with this kind of intelligence enjoy writing, reading, telling stories or doing crossword puzzles.

8. Intra-personal Intelligence
Intra-personal intelligence is the capacity to understand oneself and one’s thoughts and feelings, and to use such knowledge in planning and directioning one’s life. Intra-personal intelligence involves not only an appreciation of the self, but also of the human condition. It is evident in psychologist, spiritual leaders, and philosophers. These young adults may be shy. They are very aware of their own feelings and are self-motivated.

9. Spatial Intelligence
Spatial intelligence is the ability to think in three dimensions. Core capacities include mental imagery, spatial reasoning, image manipulation, graphic and artistic skills, and an active imagination. Sailors, pilots, sculptors, painters, and architects all exhibit spatial intelligence. Young adults with this kind of intelligence may be fascinated with mazes or jigsaw puzzles, or spend free time drawing or daydreaming.

    </pre>
    <img src="image/img2/types2.jpg" alt="" class="img img-responsive" width="100%" />
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
