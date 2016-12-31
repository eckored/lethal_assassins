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


<script>
function showRSS(str) {
  if (str.length==0) {
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>


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

<!-- News Feed -->
<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><h3>- Warface News -</h3><br>
<center><table class="rostercontact" style="background: rgba(0,0,0,0.4)">
<tr>
<th class="rostercontact" style="border-bottom: 0px"><div class="contact">
<?php include 'getrss.php' ?>
</div></th>
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