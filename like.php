<?php
  session_start();
  $file = fopen("visite.txt", "r");
  $total = fgets($file);
  fclose($file);
  $total++;
  $newfile = fopen("visite.txt", "w");
  fwrite($newfile, $total);
  $_SESSION['like'] = $total;

  fclose($newfile);
  header("Location: topic2.php");
 ?>
