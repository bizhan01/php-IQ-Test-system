<?php ob_start();
require_once("database.php");
?>


<?php
if(isset($_POST['send'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $massage=$_POST['massage'];

  if(filter_var($email,FILTER_SANITIZE_EMAIL)){
    mail('r.123bizhan@gmail.com', $subject, $massage. "\n Send By:".$name, "FROM:".$email);
  }
  else {
    echo "Invalid Email Address!";
  }
}
 ?>


<form  method="post">
  <div class="form-group">
    <h3 class="text-center font">We Want to Hear from You!</h3>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <input type="text" name="name" required placeholder="Your Full-Name"  class="form-control">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <input type="email" name="email" required placeholder="Your Email Address" class="form-control">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <label for=""></label>
      <input type="text" name="subject" required placeholder="Your Subject" class="form-control">
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <label for=""></label>
      <textarea name="massage" required rows="8" cols="40" placeholder="Your Massage" class="form-control"></textarea>
    </div>&nbsp;

    <div class="class="col-lg-12 col-md-12 col-sm-12" style="margin-left: 10px">
    <input type="submit" name="send" value="Send Massage" class="btn btn-success">
    </div>
  </div>
</form>



 <?php
 $data=ob_get_contents();
 ob_end_clean();
 require_once("masterpage.php");
  ?>
