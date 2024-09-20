<!DOCTYPE html>
<?php
require_once("database.php");
if (isset($_POST['login'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  $q="select * from admins where username='$user' AND password='$pass'";
  $result=mysqli_query($mysqli,$q);
  if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['check']=$user;
    header("location:admin.php");
  }
  else {
     header("location.login.php?login=invalid");
  }
}
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>LogIn</title>
    <link rel="shortcat icon" type="image/x-ion" href="image/logo.PNG">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylef.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container " style="background-color:#00b0f0; height:650px">
     <center>
      <img src="image/logo2.png" alt=""  class="img img-responsive "/> <br>
      <div class="col-md-5">  </div>
     <div class="col-md-3">
       <form class="" action="" method="post">
         <input type="text" name="user" value="" placeholder="Your User Name" class="form-control"> <br>
         <input type="password" name="pass" value="" placeholder="Your Password" class="form-control"> <br>
        <input type="submit" name="login" value="LogIn" class="btn btn-success" >
       </form>
     </div>
   <div class="col-md-5"> </div>
   <div class="col-md-4">
     <?php
        if(isset($_POST['login'])){?>
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" arira-lable="alart" >&times;</a>
            <p>Incerrect Username or Password!</p>
          </div>
        <?php } ?>
   </div>


    </center>
    </div>

  </body>
</html>
