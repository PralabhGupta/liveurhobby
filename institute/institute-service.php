
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
    <li><a  href="institute-profile.php">Update Profile</a></li>

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
<!--insert music-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog1" class="window1">

<table width=500px>
<th colspan=2><font size=5 align=center><u>Create a Course in Music</font></th>
<form action="institute-insert-music.php" method="post">
<tr><td>Course</td><td><input type="text" name="duration"></td></tr>
<tr><td>Duration</td><td><input type="text" name="duration"></td></tr>
<tr><td>Fees</td><td><input type="text" name="fees"></td></tr>
<tr><td>Total seats</td><td><input type="text" name="totalseats"></td></tr>
<tr><td>Remaining</td><td><input type="text" name="remaining"></td></tr>
<tr><td>Description</td><td><textarea rows="10" cols="20" name="description"></textarea></td></tr>
<tr><td>Teacher name</td><td><input type="text" name="teachername"></td></tr>
<tr><td>Contact</td><td><input type="text" name="contact"></td></tr>

<tr><td colspan=2><center><input type="submit"></center></td></tr>
</form>
</table>
</div>

<!--insert dance-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog2" class="window2">

<table width=500px>
<th colspan=2><font size=5 align=center><u>Create a Course in Dance</font></th>
<form action="institute-insert-dance.php" method="post">
<tr><td>Course</td><td><input type="text" name="duration"></td></tr>
<tr><td>Duration</td><td><input type="text" name="duration"></td></tr>
<tr><td>Fees</td><td><input type="text" name="fees"></td></tr>
<tr><td>Total seats</td><td><input type="text" name="totalseats"></td></tr>
<tr><td>Remaining</td><td><input type="text" name="remaining"></td></tr>
<tr><td>Description</td><td><textarea rows="10" cols="20" name="description"></textarea></td></tr>
<tr><td>Teacher name</td><td><input type="text" name="teachername"></td></tr>
<tr><td>Contact</td><td><input type="text" name="contact"></td></tr>

<tr><td colspan=2><center><input type="submit"></center></td></tr>
</form>
</table>
</div>

<!--insert sport-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog3" class="window3">

<table width=500px>
<th colspan=2><font size=5 align=center><u>Create a Course in Sport</font></th>
<form action="institute-insert-sport.php" method="post">
<tr><td>Course</td><td><input type="text" name="duration"></td></tr>
<tr><td>Duration</td><td><input type="text" name="duration"></td></tr>
<tr><td>Fees</td><td><input type="text" name="fees"></td></tr>
<tr><td>Total seats</td><td><input type="text" name="totalseats"></td></tr>
<tr><td>Remaining</td><td><input type="text" name="remaining"></td></tr>
<tr><td>Description</td><td><textarea rows="10" cols="20" name="description"></textarea></td></tr>
<tr><td>Teacher name</td><td><input type="text" name="teachername"></td></tr>
<tr><td>Contact</td><td><input type="text" name="contact"></td></tr>

<tr><td colspan=2><center><input type="submit"></center></td></tr>
</form>
</table>
</div>



<!--insert teaching-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog4" class="window4">

<table width=500px>
<th colspan=2><font size=5 align=center><u>Create a Course in Teaching</font></th>
<form action="institute-insert-sport.php" method="post">
<tr><td>Course</td><td><input type="text" name="duration"></td></tr>
<tr><td>Duration</td><td><input type="text" name="duration"></td></tr>
<tr><td>Fees</td><td><input type="text" name="fees"></td></tr>
<tr><td>Total seats</td><td><input type="text" name="totalseats"></td></tr>
<tr><td>Remaining</td><td><input type="text" name="remaining"></td></tr>
<tr><td>Description</td><td><textarea rows="10" cols="20" name="description"></textarea></td></tr>
<tr><td>Teacher name</td><td><input type="text" name="teachername"></td></tr>
<tr><td>Contact</td><td><input type="text" name="contact"></td></tr>

<tr><td colspan=2><center><input type="submit"></center></td></tr>
</form>
</table>
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

	<li class="topmenu"><a  class="pressed" href="institute-service.php" style="width:180px;height:26px;line-height:26px;">Services</a></li>

	<li class="topmenu"><a href="institute-events.php" style="width:180px;height:26px;line-height:26px;">Events</a></li>

	<li class="toplast"><a href="institute-gallery.php" style="width:180px;height:26px;line-height:26px;">Gallery</a></li>

</ul><p class="_css3m"></p>
</div>
<center>
<div id="newsfeed">
<center><h1>Services</h1></center>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Music</a></li>
    <li><a href="#tabs-2">Dance</a></li>
    <li><a href="#tabs-3">Sports</a></li>
  </ul>
  <div id="tabs-1">
    <?php
	$query2="select * from music where username='$id'";
	$result2=mysql_query($query2);

	while ($row2=mysql_fetch_array($result2)){

echo"<table>";
	?>
	<tr><td>Couse</td><td><?php echo $row2[course];?></td><td></td></tr>
	<tr><td>Duration</td><td><?php echo $row2[duration];?></td><td></td></tr>
	<tr><td>Fees</td><td><?php echo $row2[fees];?></td><td><a href="musicupdate.php?x=<?php echo $row2[id];?>"><img src="../images/001_45.png"></a></td></tr>
	<tr><td>Total Seats</td><td><?php echo $row2[totalseats];?></td><td></td></tr>
	<tr><td>Remaining Seats</td><td><?php echo $row2[remaining];?></td><td></td></tr>
	<tr><td>Faculty</td><td><?php echo $row2[teachername];?></td><td><a href="institute-music-delete.php?x=<?php echo $row2[id];?>"><img src="../images/delete_2.png"></a></td></tr>
	<tr><td>Contact</td><td><?php echo $row2[contact];?></td><td></td></tr>

	<tr><td>Description</td><td><?php echo"$row2[description]";?></td><td></td></tr>



	<?php
echo"</table><hr>";

	}

?>
<br><Br><Br>
<input type="button" id="insertmusic" value="Insert Music">
  </div>
  <div id="tabs-2">
     <?php
		$query3="select * from dance where username='$id'";
		$result3=mysql_query($query3);

		while ($row3=mysql_fetch_array($result3)){

	echo"<table>";
		?>
		<tr><td>Couse</td><td><?php echo $row3[course];?></td><td></td></tr>
		<tr><td>Duration</td><td><?php echo $row3[duration];?></td><td></td></tr>
		<tr><td>Fees</td><td><?php echo $row3[fees];?></td><td><a href="danceupdate.php?x=<?php echo $row3[id];?>"><img src="../images/001_45.png"></a></td></tr>
		<tr><td>Total Seats</td><td><?php echo $row3[totalseats];?></td><td></td></tr>
		<tr><td>Remaining Seats</td><td><?php echo $row3[remaining];?></td><td></td></tr>
		<tr><td>Faculty</td><td><?php echo $row3[teachername];?></td><td><a href="institute-dance-delete.php?x=<?php echo $row3[id];?>"><img src="../images/delete_2.png"></a></td></tr>
		<tr><td>Contact</td><td><?php echo $row3[contact];?></td><td></td></tr>

		<tr><td>Description</td><td><?php echo"$row3[description]";?></td><td></td></tr>



		<?php
	echo"</table><hr>";

		}

	?>
	<br><Br><Br>
<input type="button" id="insertdance" value="Insert Dance">
  </div>
  <div id="tabs-3">
    <?php
			$query4="select * from sport where username='$id'";
			$result4=mysql_query($query4);

			while ($row4=mysql_fetch_array($result4)){

		echo"<table>";
			?>
			<tr><td>Couse</td><td><?php echo $row4[course];?></td><td></td></tr>
			<tr><td>Duration</td><td><?php echo $row4[duration];?></td><td></td></tr>
			<tr><td>Fees</td><td><?php echo $row4[fees];?></td><td><a href="sportupdate.php?x=<?php echo $row4[id];?>"><img src="../images/001_45.png"></a></td></tr>
			<tr><td>Total Seats</td><td><?php echo $row4[totalseats];?></td><td></td></tr>
			<tr><td>Remaining Seats</td><td><?php echo $row4[remaining];?></td><td></td></tr>
			<tr><td>Faculty</td><td><?php echo $row4[teachername];?></td><td><a href="institute-sport-delete.php?x=<?php echo $row4[id];?>" ><img src="../images/delete_2.png"></a></td></tr>
			<tr><td>Contact</td><td><?php echo $row4[contact];?></td><td></td></tr>

			<tr><td>Description</td><td><?php echo"$row4[description]";?></td><td></td></tr>



			<?php
		echo"</table><hr>";

			}

		?>
		<br><Br><Br>
<input type="button" id="insertsport" value="Insert a Sport">
  </div>
</div>



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
