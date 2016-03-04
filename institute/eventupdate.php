
<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$x=$_GET[x];
$query="select * from $id";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$words=explode("|",$row[services]);
?>

<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript" src="js/feed.js"></script>
<link rel="stylesheet" href="css/feed.css" type="text/css" />
         <!-- Start css3menu.com HEAD section -->
		 	<link rel="stylesheet" href="CSS3 Menu_files/css3menu2/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
		 	<!-- End css3menu.com HEAD section -->
		 	<!-- Start css3menu.com HEAD section -->

		 	<link rel="stylesheet" href="CSS3 Menu_files/css3menu3/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

	<!-- End css3menu.com HEAD section -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
<!--Header-->


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
  <li><div class="buttonbg" style="width: 158px;"><a class="button_15"><?php echo"<font color=white size=4>$row[name]</font>";?></a></div></li>
  <li><div class="arrow buttonbg" style="width: 111px;"><a class="button_16">Profile</a></div>
    <ul>
    <li><a title="">Update Profile</a></li>

    <li><a title="">Change Password</a></li>
    </ul></li>
  <li><div class="buttonbg" style="width: 97px;"><a href="institute-logout.php" class="button_17">Logout</a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="mbjsmbuw9y.js"></script>
<!--profile pic-->
<?php $query1="select * from picture where username='$id'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
?>

<div class="dp" id="dp"><?php echo"<img src='$row[screenshot]' width='250px' height=250px; id='dpp'>";?>
<div class="changedp"><center><br><br><br><br><br><br><br><br>
<a href="#0" style="opacity:1;">
<img src="../images/edit_profile.png" width=90px height=90px></a>
</center>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--pop up-->
<div id="boxes">
<!--dp-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<?php echo"<img src='$row[screenshot]' width='400px' height=400px;>";?><br><br>
<form enctype="multipart/form-data" action="institute-updte-dppic.php" method="post">
<table><tr><td>Upload Picture</td><td><input type="file" name="screenshot"></td><td><input type="submit" value="Save"></td></tr></table>
</form>
</div>



<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>



<div style="float:left;width:; height:;position:fixed;"><!-- Start css3menu.com BODY section -->

<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu3" class="topmenu">

	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="institute-account.php" style="width:180px;height:26px;line-height:26px;">Home</a></li>

	<li class="topmenu"><a href="institute-feed.php" style="width:180px;height:26px;line-height:26px;">News Feed</a></li>

	<li class="topmenu"><a href="institute-service.php" style="width:180px;height:26px;line-height:26px;">Services</a></li>

	<li class="topmenu"><a  class="pressed" href="institute-events.php" style="width:180px;height:26px;line-height:26px;">Events</a></li>

	<li class="toplast"><a href="institute-gallery.php" style="width:180px;height:26px;line-height:26px;">Gallery</a></li>

</ul><p class="_css3m"></p>
</div>
<center>
<div id="newsfeed">
<center><h1>Update Event</h1></center>
<table width="" border="1">
<?php
$query="select * from event where id='$x'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result)){

echo'<form action="institute-event-update.php" method="post">';
?>
<tr><td>Event Detail</td><td><textarea name="eventdetail" rows="10" cols="20"><?php echo"$row[eventdetail]";?></textarea></td></tr>
<tr><td>Category</td><td><input type"text" name="category" value="<?php echo $row[category];?>"></td></tr>
<tr><td>Subcategory</td><td><input type"text" name="subcategory" value="<?php echo $row[subcategory];?>"></td></tr>
<input type="hidden" value="<?php echo $row[id];?>" name="hidden">
<tr><td colspan=2><input type="submit" value="update"></td></tr>
<?php echo"</form>";?>
<tr><td colspan=2><a href="institute-event-delete.php?x=<?php echo $row[id];?>"><img src="../images/delete_2.png"></a></td></tr>
<?php

}
?>
</table></center>



</div></center>
<br><br><br>
</body>
</html>
<?php
}
else
{$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>
