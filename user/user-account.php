<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$query="select * from $id";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$words=explode("|",$row[services]);
?>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript" src="js/account.js"></script>
<link rel="stylesheet" href="css/account.css" type="text/css" />
</head>
<body>
<!--menu-->
<link rel="stylesheet" href="mbcsmbuw9y.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:bold">


<div id="mbuw9yebul_wrapper">
  <ul id="mbuw9yebul_table" class="mbuw9yebul_menulist css_menu">
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="icon_2 buttonbg" style="width: 92px;"><a class="button_2"></a></div></li>
  <li><div class="icon_3 buttonbg" style="width: 340px;"><a class="button_3"></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg" style="width: 158px;"><a class="button_15"><?php echo $id;?></a></div></li>
  <li><div class="arrow buttonbg" style="width: 111px;"><a class="button_16">Profile</a></div>
    <ul>
    <li><a href="user-profile-preview.php" title="">Update Profile</a></li>

    <li><a title="">Change Password</a></li>
    </ul></li>
  <li><div class="buttonbg" style="width: 97px;"><a href="user-logout.php" class="button_17">Logout</a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="mbjsmbuw9y.js"></script>

<!--menu-->
<div class="cover"><table class="menu">
<tr>
<td style="border-right:15px solid white;border-bottom:15px solid white;" id="event">
<a href="user-event-view.php"><div class="event"><br><Br><br><Br><font color="#ffffff" size=6><b>Upcoming Events</B></font></div></a>
<img src="../images/events.gif" width=400px height=275px></td>
<td style="border-left:15px solid white;border-bottom:15px solid white;" id="gallery">
<a href="user-gallery.php"><div class="gallery"><br><Br><br><Br><font color="#ffffff" size=6><b>Click To See Your Gallery</B></font></div></a>
<img src="../images/gal.png" width=400px  height=275px></td>
</tr>
<tr>
<td style="border-right:15px solid white;border-top:15px solid white;" id="service">
<a href="user-service.php"><div class="service"><br><Br><br><Br><font color="#ffffff" size=6><b>Check Out The Services</B></font></div></a>
<img src="../images/servicess.png" width=400px height=275px></td>
<td style="border-left:15px solid white;border-top:15px solid white;" id="post" >
<a href="user-news-feed.php"><div class="post"><br><Br><br><Br><font color="#ffffff" size=6><b>Daily News Feed </B></font></div></a>
<img src="../images/work2.png" width=400px height=275px></td>
</tr>
</table>
<!--profile pic-->
<?php $query1="select * from picture where username='$id'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
?>

<div class="dp" id="dp"><?php echo"<img src='$row[screenshot]' width='250px' height=250px; id='dpp'>";?><div class="changedp"><center><br><br><br><br><br><br><br><br><a href="#0" style="opacity:1;"><img src="../images/edit_profile.png" width=90px height=90px></a></center></div></div>
</div>
<!--pop up-->
<div id="boxes">
<!--dp-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<?php echo"<img src='$row[screenshot]' width='400px' height=400px;>";?><br><br>
<form enctype="multipart/form-data" action="user-update-dppic.php" method="post">
<table><tr><td>Upload Picture</td><td><input type="file" name="screenshot"></td><td><input type="submit" value="Save"></td></tr></table>
</form>
</div>





<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>




</body>
</html>
<?php
}
else
{$a=md5(1);
header("location:../user-login.php?x=$a");
}
?>