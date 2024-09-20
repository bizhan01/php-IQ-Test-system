<?php ob_start();
require_once("database.php");
?>
<?php
session_start();
if(!$_SESSION['check'])
{
  header("location:login.php");
}
?>

<div class="panel panel-success">
  <div class="panel panel-heading" style="padding:0px">
    <h3 class="font">This Is the Totel List of People Who have Taken the Test</h3>
  </div>
  <div class="panel panel-body">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="table-responsive">
   <table class="table table-hover table-bordered table-condensed table-striped " style="border:1px">
     <thead>
       <tr>
         <th>ID</th>
         <th>FIRSTNAME</th>
         <th>LASTNAME</th>
         <th>EMAIL</th>
         <th>SCORE</th>
         <th>FEILD</th>
         <th>DATE</th>
       </tr>
     </thead>
     <tbody>

       <tr>
         <?php
         $select="select * from users ";
         $q=mysqli_query($mysqli, $select);
         foreach($q as $show){?>

         <td><?php echo $show ["user_id"] ?></td>
         <td> <?php echo $show ["fname"] ?> </td>
         <td> <?php echo $show ["lname"] ?> </td>
         <td> <?php echo $show ["Email"] ?> </td>
         <td> <?php echo $show ["gender"] ?> </td>
         <td><?php echo $show ["degree"] ?> </td>
         <td> <?php echo $show ["Quiz_Date"] ?> </td>
       </tr>
       <?php } ?>
     </tbody>
   </table>
 </div>
 </div>
  </div>
</div>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
