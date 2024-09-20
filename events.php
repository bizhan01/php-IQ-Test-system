<?php ob_start(); ?>
<?php include "database.php"; ?>

<div>
    <h1 style="background-color:#60c3e6; color: white" class="font"><strong>Our Vision</strong></h1>
    <p class="font" style="font-size: 20px">
      Maturity of people have just trouble chosen their field of studies,
      future career and exploring their unique talent. Very unfortunately
      even so many people who have bachelors or a master degrees or have aged
       enough are still not sure if they are going the right way. This is because,
        we are living in a very complex world with a large number of population,
         communications, media and potential improvement of education and
         technologies. In addition, everyday creation of different skills made
          the life hard and makes us far away from pure thinking to really find
          out the right way, right career and right educational and business skills
           to survive. As long as, having some specific skills are the only way for
           having a prosperous future. In the other hand, it’s the biggest
           challenges which the citizens of this civilized world faced. <br></br>

        My project IQ+ (IQ Plus) tries to help people handle these types of dilemmas
         (uncertainties). It’s something beyond just a traditional IQ test.
          It does not only scale your IQ but classifies your intelligent too,
          based on different areas of human intelligent using scientific,
           psychological, logical and data mining theories.
           The core of this project is quite like an IQ test but still
           we try to keep our uniqueness. I believe every single individual
           is unique and intelligent enough but let’s try to help one another
           to discover and explore their potential energies. <br></br>
           Best Wish <br>
           IQ+ Bored of Management

    </p>

</div>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
