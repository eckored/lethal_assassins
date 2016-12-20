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

<!-- Database Connection -->
<?php
// Get DB Connection
  include_once "../DBConnection.php";
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
<table class="rostertop" style="background: rgba(0,0,0,0.5)">
  <tr>
    <th class="rostera">Rank</th>
    <th class="rosterb">Name</th>
    <th class="rosterc">Join Date</th>
    <th class="rosterd">Discord ID</th>
  </tr>

<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM player WHERE rank = 1 ORDER BY `joindate`";
$Master = $dbh->query($memberQuery);
foreach ($Master as $user) {
  ?>
  <tr>
    <td class="rostera">Clan Master</td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
    <td class="rosterd"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  </tr>
  <tr>
    <th class="roster1" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM player WHERE rank = 2 OR rank = 3 ORDER BY rank ASC, `joindate`";
$Officer = $dbh->query($memberQuery);
foreach ($Officer as $user) {
  ?>
  <tr>
    <td class="rostera">Officer</td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
    <td class="rosterd"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  <tr>
    <th class="roster1" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM player WHERE rank = 4 ORDER BY `joindate`";
$Fighter = $dbh->query($memberQuery);
foreach ($Fighter as $user) {
  ?>
  <tr>
    <td class="rostera">Fighter</td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
    <td class="rosterd"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  <tr>
    <th class="roster1" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM player WHERE rank = 13 ORDER BY `joindate`";
$Recruit = $dbh->query($memberQuery);
foreach ($Recruit as $user) {
  ?>
  <tr>
    <td class="rostera">Recruit</td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
  </tr>
  <?php
}
?>
</table>

<table class="rostercontact" style="background: rgba(0,0,0,0.5)">
<tr>
<th class="roster"><div class="contact">Contact our Master or one of our Officer's if you are interested in joining forces with Lethal Assassins, or you wish to set up a Clan War.</div></th>
</tr>
</table>
</center>

<br><br><br>


<!-- Screenshots -->
<center><table id="maintable1" style="background: rgba(0,0,0,0.6)"><tr><td><div>- Screenshots -</div></td></tr></table></center><br>
<center><table id="maintable2" style="background: rgba(0,0,0,0.6)"><tr><td><br>
<div class="w3-content w3-display-container" style="max-width:700px">
  <img class="mySlides" src="http://imgur.com/WuepXLd.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/Mkz1oMj.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/sMo48zc.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/X1xyVRr.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/QMo1A9R.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/YLBbmBD.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/3Iqrxkg.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/43T8O96.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/NvP0BVW.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/JlVskZt.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/IsZqwQW.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/nOmAsvp.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/e8cdv5g.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/aEM8OKe.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/ArxUbnx.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/VBV9Ocg.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/FPsxaxf.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/Avm7zQE.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/X5dzXw3.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/1qb5di1.jpg" style="width:100%">
  <img class="mySlides" src="http://imgur.com/hISbQb.jpgR" style="width:100%">
  <img class="mySlides" src="http://imgur.com/vOVN031.jpg" style="width:100%">
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
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(11)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(12)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(13)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(14)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(15)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(16)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(17)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(18)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(19)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(20)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(21)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(22)"></span>
    </div>
</div>
<script>var slideIndex = 1;showDivs(slideIndex);function plusDivs(n) {showDivs(slideIndex += n);}function currentDiv(n) {showDivs(slideIndex = n);}function showDivs(n) {var i;var x = document.getElementsByClassName("mySlides");var dots = document.getElementsByClassName("demo");if (n > x.length) {slideIndex = 1}if (n < 1) {slideIndex = x.length}for (i = 0; i < x.length; i++) {x[i].style.display = "none";}for (i = 0; i < dots.length; i++) {dots[i].className = dots[i].className.replace(" w3-white", "");}x[slideIndex-1].style.display = "block";dots[slideIndex-1].className += " w3-white";}</script>
<br>
</td></tr></table></center>
<br><br><br>

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
