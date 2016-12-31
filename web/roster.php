<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>LETHAL-ASSASSINS</title>
  <meta name="description" content="Lethal Assassins : Roster">
  <meta name="author" content="EckoRED">
  <link rel="stylesheet" type="text/css" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body><noscroll>

<!-- Top Logo -->
<table height="100" width="100%" borderwidth="0" padding="0" cellpadding="0" cellspacing="0">
  <tr>
    <td vAlign="center" align="center"><img src="http://i.imgur.com/Ae08bX6.png"/></td>
  </tr>
</table>

<!-- Menu -->

<center><a class="menu" href="/index.php">HOME</a> &#8226; <a class="menu" href="/roster.php">ROSTER</a> &#8226; <a class="menu" href="/media.php">MEDIA</a></center>

<br><br>

<!-- Database Connection -->
<?php
// Get DB Connection
  include_once "DBConnection.php";
  try {
    $dbh = new PDO($db_connection_string, $db_user, $db_password);
  }
  catch(Exception $ex) {
    die("<center><table class='maintable' style='background: rgba(0,0,0,0.6)'><tr><td><div><br>Sorry, we're have some trouble at the moment.<br></div></td></tr></table></center>");
  }
?>

<!-- Roster List -->
<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><h3>- Roster -</h3><br>
<center><table class="rostertop" style="background: rgba(0,0,0,0.4)">
  <tr>
    <th class="rosterth" style="text-align: center">Rank</th>
    <th class="rosterth" style="text-align: left">Name</th>
    <th class="rosterth" style="text-align: center">Join Date</th>
    <th class="rosterth" style="text-align: right">Discord ID</th>
  </tr>
<?php $memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Master ORDER BY `joindate`";
$Master = $dbh->query($memberQuery);
foreach ($Master as $user) { ?>
  <tr>
    <td class="roster" style="text-align: center"><?php echo $user["rank"] ?></td>
    <td class="roster" style="text-align: left"><?php echo $user["name"] ?></td>
    <td class="roster" style="text-align: center"><?php echo $user["joindate"] ?></td>
    <td class="roster" style="text-align: right"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php } ?>
  </tr>
  <tr>
    <th class="rosterspacer" colspan="4"></th>
  </tr>
<?php $memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Officer ORDER BY `joindate`";
$Officer = $dbh->query($memberQuery);
foreach ($Officer as $user) { ?>
  <tr>
    <td class="roster" style="text-align: center"><?php echo $user["rank"] ?></td>
    <td class="roster" style="text-align: left"><?php echo $user["name"] ?></td>
    <td class="roster" style="text-align: center"><?php echo $user["joindate"] ?></td>
    <td class="roster" style="text-align: right"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php } ?>
  <tr>
    <th class="rosterspacer" colspan="4"></th>
  </tr>
<?php $memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Fighter ORDER BY `joindate`";
$Fighter = $dbh->query($memberQuery);
foreach ($Fighter as $user) { ?>
  <tr>
    <td class="roster" style="text-align: center"><?php echo $user["rank"] ?></td>
    <td class="roster" style="text-align: left"><?php echo $user["name"] ?></td>
    <td class="roster" style="text-align: center"><?php echo $user["joindate"] ?></td>
    <td class="roster" style="text-align: right"><?php echo $user["discordid"] ?></td>
  </tr>
  <?php } ?>
  <tr>
    <th class="rosterspacer" colspan="4"></th>
  </tr>
<?php $memberQuery = "SELECT `id`, `rank`, `name`, `joindate`, `discordid` FROM Recruit ORDER BY `joindate`";
$Recruit = $dbh->query($memberQuery);
foreach ($Recruit as $user) { ?>
  <tr>
    <td class="roster" style="text-align: center"><?php echo $user["rank"] ?></td>
    <td class="roster" style="text-align: left"><?php echo $user["name"] ?></td>
    <td class="roster" style="text-align: center"><?php echo $user["joindate"] ?></td>
  </tr>
  <?php } ?>
</table></center>
<br>
<center><table class="rostercontact" style="background: rgba(0,0,0,0.4)">
<tr>
<th class="rostercontact" style="border-bottom: 0px"><div class="contact">Contact our Master or one of our Officer's if you are interested in joining forces with Lethal Assassins, or you wish to set up a Clan War.</div></th>
</tr>
</table></center><br>
</td></tr></table></center>
<br><br><br>


<!-- Bottom Toolbar -->
<table class="bottomtoolbar" style="background: rgba(0,0,0,0.7)"><tr><td>
<div class="bottomtoolbardiv">Copyright &copy; 2016 by Jeremy Manning &nbsp;</div>
</td></tr></table></center>
</noscroll></body>
</html>