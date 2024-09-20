<?php ob_start(); ?>


<h2 class="font">About the Authors</h2>
<h4 class="font">Developed by "A" Group</h4>
  <table  style="font-size:20px">
    <tr>
      <td>Shekiba "Kajabi"</td>
    </tr>
    <tr>

      <td>Rokhshana "Nazari"</td>
    </tr>
    <tr>

      <td>Sakina "Hussaini"</td>
    </tr>
    <tr>

      <td>Rahmatullah "Bizhan"</td>
    </tr>

  </table>


<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
