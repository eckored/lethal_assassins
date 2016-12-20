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
<table height="100" width="100%" borderwidth="0" padding="0" cellpadding="0" cellspacing="0">
  <tr>
    <td vAlign="center" align="center"><img src="http://i.imgur.com/Ae08bX6.png"/></td>
  </tr>
</table>

<br><br>


<!-- Database Connection -->
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


<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><div>- Roster -</div></center><br>
<center><table class="rostertop" style="background: rgba(0,0,0,0.4)">
  <tr>
    <th class="rostertha">Rank</th>
    <th class="rosterthb">Name</th>
    <th class="rosterthc">Join Date</th>
    <th class="rosterthd">Discord ID</th>
  </tr>

<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Master ORDER BY `joindate`";
$Master = $dbh->query($memberQuery);
foreach ($Master as $user) {
  ?>
  <tr>
    <td class="rostera"><?php echo $user["rank"] ?></td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
    <td class="rosterd"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  </tr>
  <tr>
    <th class="rosterth" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Officer ORDER BY `joindate`";
$Officer = $dbh->query($memberQuery);
foreach ($Officer as $user) {
  ?>
  <tr>
    <td class="rostera"><?php echo $user["rank"] ?></td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
    <td class="rosterd"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  <tr>
    <th class="rosterth" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Fighter ORDER BY `joindate`";
$Fighter = $dbh->query($memberQuery);
foreach ($Fighter as $user) {
  ?>
  <tr>
    <td class="rostera"><?php echo $user["rank"] ?></td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
    <td class="rosterd"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php
}
?>
  <tr>
    <th class="rosterth" colspan="4"></th>
  </tr>
<?php
$memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Recruit ORDER BY `joindate`";
$Recruit = $dbh->query($memberQuery);
foreach ($Recruit as $user) {
  ?>
  <tr>
    <td class="rostera"><?php echo $user["rank"] ?></td>
    <td class="rosterb"><?php echo $user["name"] ?></td>
    <td class="rosterc"><?php echo $user["joindate"] ?></td>
  </tr>
  <?php
}
?>
</table></center>
<br>
<center><table class="rostercontact" style="background: rgba(0,0,0,0.4)">
<tr>
<th class="rostercontactth"><div class="contact">Contact our Master or one of our Officer's if you are interested in joining forces with Lethal Assassins, or you wish to set up a Clan War.</div></th>
</tr>
</table></center><br>
</td></tr></table></center>

<br><br>


<!-- Screenshots -->
<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><div>- Screenshots -</div></center><br>
<div class="w3-content w3-display-container" style="max-width:700px">
  <img class="mySlides" src="http://imgur.com/WuepXLd.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/Mkz1oMj.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/sMo48zc.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/X1xyVRr.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/QMo1A9R.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/YLBbmBD.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/3Iqrxkg.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/43T8O96.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/NvP0BVW.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/JlVskZt.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/IsZqwQW.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/nOmAsvp.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/e8cdv5g.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/aEM8OKe.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/ArxUbnx.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/VBV9Ocg.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/FPsxaxf.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/Avm7zQE.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/X5dzXw3.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/1qb5di1.jpg" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/hISbQb.jpgR" style="width:100%"/>
  <img class="mySlides" src="http://imgur.com/vOVN031.jpg" style="width:100%"/>
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
<br><br>


<!-- Fan Art -->
<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><div>- Fan Art -</div></center><br>

<center><img class="fanartimg" src="http://imgur.com/eBR0uqV.jpg" width="" height=""/></center>
<br>
<center><img class="fanartimg" src="http://imgur.com/AbewAnp.jpg" width="" height=""/></center>

<br>
</td></tr></table></center>

<br><br><br>


<!-- Bottom Toolbar -->
<table class="bottomtoolbar" style="background: rgba(0,0,0,0.7)"><tr><td>
<div class="bottomtoolbardiv">Copyright &copy; 2016 by Jeremy Manning &nbsp;</div>
</td></tr></table></center>
</noscroll></body>
</html>