<style media="screen">
#button a{
    display: block;
    margin: 5px;
  }
  img{
    margin-top: 20px;
  }
</style>
<?php ob_start();?>
<?php
session_start();
if(!$_SESSION['check'])
{
  header("location:login.php");
}
?>
<div id="button" class="col-md-7">
  <h1 class="font">Welcome to Admin Panel</h1>

  <a href="add.php"><input type="button" name="name" value="Add New Question" class="btn btn-info btn-lg,font"></a>
  <a href="userList.php"><input type="button" name="name" value="User List" class="btn btn-info btn-lg, font"></a>
  <a href="adduser.php"><input type="button" name="name" value="Add New User" class="btn btn-info btn-lg, font"></a>
  <a href="#"><input type="button" name="name" value="More Setting" class="btn btn-info btn-lg,font"></a>
  <a href="logout.php"><input type="button" name="name" value="Log Out" class="btn btn-danger btn-lg, font"></a>
</div>
<div class="col-md-5">
  <img src="image/gears.gif" alt="" class="img img-responsive" />
</div>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
