<!doctype html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <title>Lethal Assassins</title>
    <meta name="description" content="Home Of The Lethal Assassins">
    <meta name="author" content="EckoRED">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body><noscroll>

<!-- Top Logo -->
<table height="100" width="100%" borderwidth="0" padding="0" cellpadding="0" cellspacing="0"><tr>
    <td vAlign="center" align="center"><img src="http://i.imgur.com/Ae08bX6.png"/></td>
</tr></table>

<!-- Menu -->
<center style="color: #F4F4F4"><a class="menu" href="/index.php">HOME</a> &#8226; <a class="menu" href="/roster.php">ROSTER</a> &#8226; <a class="menu" href="/media.php">MEDIA</a></center>
<br><br>

<!-- News Feed -->
<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><h3>- Warface News -</h3><br>
<center><table class="newsfeed" style="background: rgba(0,0,0,0.4); text-align: justify;">
<tr>
<td>
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("https://www.warface.com/en/news/rss");
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=5; $i++) {
  $item_img=$x->item($i)->getElementsByTagName('enclosure')
  ->item(0)->getAttribute('url');
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_date=$x->item($i)->getElementsByTagName('pubDate')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<table><tr>");
  echo ("<td><img src='" . $item_img . "' width='" . 150 . "'></td>");
  echo ("<td>
    <div class='" . rss1 . "' ><a href='" . $item_link . "'>" . $item_title . "</a></div>
    <div class='" . rss2 . "' >" . $item_date . "</div>
    <div class='" . rss3 . "' >" . $item_desc . "</div><br></td>");
  echo ("</tr></table>");


}
?>
</td>
</tr>
</table></center><br>
</td></tr></table></center>
<br><br>


<center><table class="maintable" style="background: rgba(0,0,0,0.6)"><tr><td><h3>- Lethal Assassins News -</h3><br>
<center><table class="newsfeed" style="background: rgba(0,0,0,0.4)">
<tr>
<td><div class="rss3">
This section will provide a news feed containing current and upcoming Lethal Assassins events, including ESL Tournaments and clan activities.
</div></td>
</tr>
</table></center><br>
</td></tr></table></center>
<br><br><br>

<!-- Bottom Toolbar -->
<table class="bottomtoolbar" style="background: rgba(0,0,0,0.7)"><tr><td>
<div class="bottomtoolbardiv">Copyright &copy; 2016 by Jeremy Manning aka EckoRED&nbsp;</div>
</td></tr></table></center>
</noscroll></body>
</html>