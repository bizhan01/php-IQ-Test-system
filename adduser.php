  <?php ob_start();?>
  <?php
  require_once("database.php");
  session_start();
  if(!$_SESSION['check'])
  {
    header("location:login.php");
  }
  ?>

  <?php
  if (isset($_POST['submit'])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $accessLevel=$_POST["accessLevel"];
    $username=$_POST["username"];
    $password=$_POST["password"];

     $q="INSERT INTO `admins` (`ID`, `fname`, `lname`, `email`, `accessLevel`, `username`, `password`) VALUES (NULL, '$fname', '$lname', '$email', '$accessLevel', '$username', '$password')";
     $insert=mysqli_query($mysqli,$q);
     if($insert){
        header("location:admin.php");
     }
  }
   ?>
      <div class="panel panel-info">
        <div class="panel panel-heading">
          <h3 style="margin:0px" class="font">Add A New User</h3>
        </div>
        <div class="panel panel-body">
          <form method="post">
      <div class="form-group col-md-6">
        <input type="text" name="fname" placeholder=" First Name" required="required" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <input type="text" name="lname" placeholder="Last Name" required="required" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <input type="email" name="email" placeholder="Email Address" required="required" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <input type="text" name="accessLevel" placeholder="Access Level" required="required" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <input type="text" name="username" placeholder="Username" required="required" class="form-control">
      </div>
      <div class="form-group col-md-6">
      <input type="password" name="password" placeholder="Password" required="required" class="form-control">
      </div>
      <input type="submit" name="submit" value="Register" class="btn btn-success">
      </form>
        </div>
      </div>
  <?php
  $data=ob_get_contents();
  ob_end_clean();
  require_once("masterpage.php");
   ?>
