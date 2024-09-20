<?php include "database.php"; ?>
<?php session_start(); ?>
<?php ob_start(); ?>

<?php
  echo crypt("hello");

 ?>



      		<?php
      		$data=ob_get_contents();
      		ob_end_clean();
      		require_once("masterpage.php");
      		 ?>
