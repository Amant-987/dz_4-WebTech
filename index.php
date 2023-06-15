

<?php

$variable = ["Aleksandr", "Belyi"];
$beruf = "IT-coding";
$email = "aleksandr.belyiGE @outlook.com";
$stadt = "München, Deutschland";
$telefon = "+49 89 2566457";
$skills = [["Java","JS","C#","Python"],["15", "20", "70", "65"]];
$Sprache = [["Englisch", "Deutsch", "Russisch"],["85","70","100"]];
$arbeit = [
  ["Manager Lagerhaus", "OneMoscowApproach Projekt Lead Specialist", "Spezialist für Verkaufs- und Beschaffungsunterstützung"],
  ["06.2023", "05.2021-11.2021", "02.2019-11.2022"],
  ["Lagerverwaltung - Empfang und Versand von Waren", "Einrichtung und Betrieb des OMA, Erstellung der technischen Dokumentation", "Vertriebs- und Lieferunterstützung - Umgang mit Einkauf, Lagerbestand, Lieferungen"]];
$Ausbildung = [
  ["GB.ru", "Coursera.com", "Coursera.com"],
  ["02.2023", "02.2021-11.2022", "02.2021-11.2022"],
  ["Entwickler:
      WEB-Entwicklung in Python, C#, JS", "Spezialist für Excel und Analytik:
      Excel Business - Erlernen von Formeln und Makros zur Erstellung von Analysetools", "Spezialist für Power BI-Analysen: 
          Power BI - Erstellen von Tools für die Analytik"]];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mein Resümee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Name  <?= $variable[0] ?> <?= $variable[1] ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $beruf ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $stadt ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $email ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $telefon ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p><?= $skills[0][0] ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[1][0]?>%"><?= $skills[1][0] ?>%</div>
          </div>
          <p><?= $skills[0][1] ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[1][1] ?>%">
              <div class="w3-center w3-text-white"><?= $skills[1][1] ?>%</div>
            </div>
          </div>
          <p><?= $skills[0][2] ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[1][2] ?>%"><?= $skills[1][2] ?>%</div>
          </div>
          <p><?= $skills[0][3] ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[1][3] ?>%"><?= $skills[1][3] ?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Sprache</b></p>
          <p><?= $Sprache[0][0] ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?= $Sprache[1][0] ?>%"></div>
          </div>
          <p><?= $Sprache[0][1] ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?= $Sprache[1][1] ?>%"></div>
          </div>
          <p><?= $Sprache[0][2] ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?= $Sprache[1][2] ?>%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Arbeitserfahrung</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $arbeit[0][0] ?> </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $arbeit[1][0] ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?= $arbeit[2][0] ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $arbeit[0][1] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $arbeit[1][1] ?></h6>
          <p><?= $arbeit[2][1] ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $arbeit[0][2] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $arbeit[1][2] ?></h6>
          <p><?= $arbeit[2][2] ?></p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Bildung</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $Ausbildung[0][0] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Since <?= $Ausbildung[1][0] ?></h6>
          <p><?= $Ausbildung[2][0] ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $Ausbildung[0][1] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $Ausbildung[1][1] ?></h6>
          <p><?= $Ausbildung[2][1] ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $Ausbildung[0][2] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $Ausbildung[1][2] ?></h6>
          <p><?= $Ausbildung[2][2] ?></p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
