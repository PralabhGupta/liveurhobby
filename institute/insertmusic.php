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

?>
<html>
<head>
<style>
body{background-image:url("../images/music.jpg");
	margin:0px;
	color:#ffffff;
	 background-size: 100% 100%;
	 background-repeat: no-repeat;}
input[type="text"]{height:40px;
 					width:300px;}
 input[type="submit"]{height:35px;
 					width:100px;
 					background-color:#000000;
 					color:#ffffff;
 					margin-left:;}
 .container{background-color:;
 			width:500px;
 			border-radius: 25px;
 			margin-left:200px;
 			text-align:center;
 			}
 .header{position:fixed;
 		width:100%;
 		z-index:10;
		background-color:#000000;}
</style>
</head>
<body>
<!--Header-->
<div class="header"><table width=100%><tr><td width=50px><img src="../images/blank.png"></td><td width=52px><img src="../images/logo2.png"></td><td  width=300px><img src="../images/logo.png"></td><td width=55%></td><td><?php echo"<font color=white>$row[name]</font>";?></td>
<td><link rel="stylesheet" href="home/mbcsmbinsmenu2.css" type="text/css" />


<div id="mbinsmenu2ebul_wrapper">
  <ul id="mbinsmenu2ebul_table" class="mbinsmenu2ebul_menulist css_menu">
  <li><a href="institute-account.php"><div class="buttonimg buttonimg_34" style="width: 61px; background-image: url('home/mb_home.png')">Home</div></a></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="home/mbjsmbinsmenu2.js"></script>
</td><td>
<link rel="stylesheet" href="menumaker_files/mbcsmbmcp.css" type="text/css" />



<div id="mbmcpebul_wrapper">
  <ul id="mbmcpebul_table" class="mbmcpebul_menulist css_menu">
  <li><a href="institute-logout.php"><div class="buttonimg buttonimg_34" style="width: 71px; background-image: url('menumaker_files/mb_logout.png')">Logout</div></a></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="menumaker_files/mbjsmbmcp.js"></script>
</td></tr></table></div>
<br><br><Br><br><br>
<div class="container">
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

</body>
</html>
<?php
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>
