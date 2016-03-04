
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
<script type="text/javascript" src="js/feed.js"></script>
<link rel="stylesheet" href="css/feed.css" type="text/css" />
         <!-- Start css3menu.com HEAD section -->
		 	<link rel="stylesheet" href="CSS3 Menu_files/css3menu2/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
		 	<!-- End css3menu.com HEAD section -->
		 	<!-- Start css3menu.com HEAD section -->

		 	<link rel="stylesheet" href="CSS3 Menu_files/css3menu3/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

	<!-- End css3menu.com HEAD section -->
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
<form enctype="multipart/form-data" action="user-update-dppic.php" method="post">
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
	<li class="topfirst"><a href="user-account.php" style="width:180px;height:26px;line-height:26px;">Home</a></li>

	<li class="topmenu"><a class="pressed" href="user-news-feed.php" style="width:180px;height:26px;line-height:26px;">News Feed</a></li>

	<li class="topmenu"><a href="user-service.php" style="width:180px;height:26px;line-height:26px;">Services</a></li>

	<li class="topmenu"><a href="user-event-view.php" style="width:180px;height:26px;line-height:26px;">Events</a></li>

	<li class="toplast"><a href="user-gallery.php" style="width:180px;height:26px;line-height:26px;">Gallery</a></li>


</ul><p class="_css3m"></p>
</div>
<center>
<div id="newsfeed">
<center><h1>News Feed</h1></center>

<table width="700px">
<tr>
<td>
<?php
//$dbc=mysqli_connect("localhost","root","","hobby");
$query4="select * from post order by id DESC";
$result4=mysql_query($query4);
$i=0;
while($row4=mysql_fetch_array($result4)){

echo"<br><br>";

$query10="select * from $row4[username]";
$result10=mysql_query($query10);
$row10=mysql_fetch_array($result10);
$target="../institute/".$row10[screenshot];
?>
<p>
<img src=<?php echo $target;?> style="float:left;height:50px;width:50px;">
<?php
 echo"$row10[name]";?></p><br>
<?php
echo"$row4[data]";
echo"<br>";
$path="like.php?y=".$row4[id];
echo"$row4[likes]";
echo"<a href=$path style='text-decoration:none;'>&nbsp;&nbsp;&nbsp;<img src='../images/like.png' width=30px height=30px></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../images/comment.png' width=30px height=30px>";


$i=$i+1;
echo'<form action="user-comment.php" method="post">';
echo"Comment";
echo'<input type="text" name="comment">';
$hidden=$row4[id];
$hide="hidden";
echo"<input type=$hide name=$hide value=$hidden>";
echo'<input type="submit" value="submit">';
echo"</form>";
echo"Your Comments";
$query5="select * from comment where id='$row4[id]'";
echo"<br>";
$j=0;
$result5=mysql_query($query5);
while($row5=mysql_fetch_array($result5)){
echo"";
?>
<p>
<img src="dppic.jpg" style="float:left;height:50px;width:50px;">
<?php
 echo"<b>$row5[username]</b>";

echo"<br>";
echo"$row5[comments]";
?></p>
<?php
echo"<br>";
$j=$j+1;}
}
?>
</td></tr></table>






</div></center>
<br><br><br>
</body>
</html>
<?php
}
else
{$a=md5(1);
header("location:../user-login.php?x=$a");
}
?>
