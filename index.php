<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>LETHAL-ASSASSINS</title>
  <meta name="description" content="Home Of The Lethal Assassins">
  <meta name="author" content="EckoRED">
  <link rel="stylesheet" type="text/css" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <style>
  .mySlides {display:none}
  .w3-left, .w3-right, .w3-badge {cursor:pointer}
  .w3-badge {height:13px;width:13px;padding:0}
  </style>
</head>

<body><noscroll>


<!-- Top Logo -->
<table height="164" width="100%" borderwidth="0" padding="0" cellpadding="0" cellspacing="0">
  <tr>
<!--        <td style="BACKGROUND: url(img/main-top-bg2.png) no-repeat top " vAlign="center" align="center"><img src="img/LethalAssassins.png"></img><br><br><br><br></td> -->
    <td vAlign="center" align="center"><img src="img/LethalAssassins.png"></img><br><br><br><br></td>
  </tr>
</table>



<!--
<center>
<table id="rostertop">
<tr>
    <th id="roster"><div onclick="showForm(1);" name="show" value="On">Click me to see fan art!</div></th>
</tr>
<tr>
    <td id="roster"><div id="hideart"><?php include 'art.html';?></div></td>
</tr>
</table>
<center>
<br><br><br>
-->

<?php
// Get DB Connection
  include_once "DBConnection.php";
  try {
    $dbh = new PDO($db_connection_string, $db_user, $db_password);
  }
  catch(Exception $ex) {
    die("Sorry, we're have some trouble at the moment.");
  }
?>

<!-- Roster List -->
<div>- Roster -</div>
<center>
<table id="rostertop" style="background: rgba(0,0,0,0.5)">
  <tr>
    <th id="roster">Rank</th>
    <th id="roster">Name</th>
    <th id="roster">Join Date</th>
    <th id="roster">Discord ID</th>
  </tr>

<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Master ORDER BY `joindate`";
$Master = $dbh->query($memberQuery);

foreach ($Master as $user) {
  ?>
  <tr>
    <td><?php echo $user["rank"] ?></td>
    <td><?php echo $user["name"] ?></td>
    <td><?php echo $user["joindate"] ?></td>
    <td><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  </tr>
  <tr>
    <th id="roster1" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Officer ORDER BY `joindate`";
$Officer = $dbh->query($memberQuery);

foreach ($Officer as $user) {
  ?>
  <tr>
    <td><?php echo $user["rank"] ?></td>
    <td><?php echo $user["name"] ?></td>
    <td><?php echo $user["joindate"] ?></td>
    <td><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  <tr>
    <th id="roster1" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Officer ORDER BY `joindate`";
$Fighter = $dbh->query($memberQuery);

foreach ($Fighter as $user) {
  ?>
  <tr>
    <td><?php echo $user["rank"] ?></td>
    <td><?php echo $user["name"] ?></td>
    <td><?php echo $user["joindate"] ?></td>
    <td><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  <tr>
    <th id="roster1" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Officer ORDER BY `joindate`";
$Recruit = $dbh->query($memberQuery);

foreach ($Recruit as $user) {
  ?>
  <tr>
    <td><?php echo $user["rank"] ?></td>
    <td><?php echo $user["name"] ?></td>
    <td><?php echo $user["joindate"] ?></td>
  </tr>
  <?php
}
?>
</table>

<table id="rostercontact" width="550" style="background: rgba(0,0,0,0.5)">
<tr>
<th id="roster"><div id="contact">Contact our Master or one of our Officer's if you are interested in joining forces with Lethal Assassins, or you wish to set up a Clan War.</div></th>
</tr>
</table>
</center>

<br><br><br>

<!-- Screenshots -->
<div>- Screenshots -</div>
<div class="w3-content w3-display-container" style="max-width:700px">
  <img class="mySlides" src="img/screenshots/solo/01.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/02.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/03.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/04.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/05.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/06.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/07.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/08.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/09.jpg" style="width:100%">
  <img class="mySlides" src="img/screenshots/solo/10.jpg" style="width:100%">
  <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(9)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(10)"></span>
  </div>
</div>
<br><br>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>



</noscroll></body>
</html>
