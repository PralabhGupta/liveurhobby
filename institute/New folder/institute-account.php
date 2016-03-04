
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {

		var id = '#dialog';
$('#pc').click(function () {
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		//transition effect
		$('#mask').fadeIn(1000);
		$('#mask').fadeTo("slow",0.8);

		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();

		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);

		//transition effect
		$(id).fadeIn(2000);
	});
	//display popup for gallery
	$('#gal').click(function (e) {
	e.preventDefault();
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();

			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});

			//transition effect
			$('#mask').fadeIn(1000);
			$('#mask').fadeTo("slow",0.8);

			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();

			//Set the popup window to center
			$("#dialog1").css('top',  winH/2-$("#dialog1").height()/2);
			$("#dialog1").css('left', winW/2-$("#dialog1").width()/2);

			//transition effect
			$("#dialog1").fadeIn(2000);
	});
	$('#dpp').click(function (e) {
		e.preventDefault();
				//Get the screen height and width
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();

				//Set heigth and width to mask to fill up the whole screen
				$('#mask').css({'width':maskWidth,'height':maskHeight});

				//transition effect
				$('#mask').fadeIn(1000);
				$('#mask').fadeTo("slow",0.8);

				//Get the window height and width
				var winH = $(window).height();
				var winW = $(window).width();

				//Set the popup window to center
				$("#dialog2").css('top',  winH/2-$("#dialog2").height()/2);
				$("#dialog2").css('left', winW/2-$("#dialog2").width()/2);

				//transition effect
				$("#dialog2").fadeIn(2000);
	});
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();

		$('#mask').hide();
		$('.window').hide();
	});
	$('.window1 .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();

			$('#mask').hide();
			$('.window1').hide();

	});
	$('.window2 .close').click(function (e) {
				//Cancel the link behavior
				e.preventDefault();

				$('#mask').hide();
				$('.window2').hide();

		});


	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
		$('.window1').hide();
		$('.window2').hide();
	});


});

</script>
<script type="text/javascript">
var xmlhttp;
function showUser()
{ var str=$("#textstatus").val();
	if (str=="")
	{
		document.getElementById("txtHint").innerHTML="Please Enter UId/Name";
		return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=showdata;
	xmlhttp.open("GET","institute-status.php?x="+str,true);
	xmlhttp.send();
}
function showdata()
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{

	}
}
</script>

<style type="text/css">


#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
#boxes .window{
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
.window1 {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
.window2 {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes  #dialog  {
  width:375px;
  height:203px;
  padding:10px;
  background-color:#ffffff;
}
#dialog1  {
  width:375px;
  height:203px;
  padding:10px;
  background-color:#ffffff;
}
#dialog2  {
  width:375px;
  height:203px;
  padding:10px;
  background-color:#ffffff;
}
body{margin:0px;background-color:#e9e9e9;}
.header{position:fixed;
		width:100%;
		z-index:8888;
		background-color:#000000;}
.content{margin-left:100px;
		margin-right:50px;
		position:relative;
		//border: 3px solid #00ffff;
		height:100%;}
[type="submit"]{height:35px;
 					width:100px;
 					background-color:#000000;
 					color:#ffffff;
 					margin-left:;}
.cover_pic{width:70%;
		//border: 3px solid #ffffff;
		position:relative;
		float:left;}
.dp{position:absolute;
	border: 5px solid #ffffff;
	top: 335px;
    left:10px;
	z-index:8888;}
.a{margin-top:530px;
	position:absolute;
	//border: 5px solid #ff00ff;
	width:70%;

	}
.gallery{//border: 5px solid #ffff00;
		float:left;
		width:30%;
		height:500px;
		}
.b{margin-left:40px;

	//border: 4px solid #000000;
	float:left;
	width:63%;
	}
textarea{height:50px;
		width:100%;}
post{height:30px;
		width:50px;

		}
.status1{width:100%;
		}
.updates{margin-left:40px;

		//border: 4px solid #0ff000;
		float:left;
		width:63%;
		margin-top:30px;
		height:100px;}
.event_bar{float:right;
			//border:4px solid #000ff0;
			position:relative;
			height:500px;
			width:25%;
			text-align:center;}
.create_event{margin-top:100%;
				position:absolute;}
#events{background-color:#ffffff;
		width:96%;
		margin-right:2%;
		margin-left:2%;}
.space{width:100%;}
.chngedp{position:absolute;top:110px;right:7px;
		z-index:5;
		margin-top:5px;

		text-align:center;}
.chngecover{position:absolute;bottom:88px;
		right:30px;
		z-index:5;
		margin-top:5px;


		}
a{text-decoration:none;
	color:#000000;}

</style>
</head>
<body>





<!--Header-->
<div class="header"><table width=100%><tr><td width=50px><img src="../images/blank.png"></td><td width=52px><img src="../images/logo2.png"></td><td  width=300px><img src="../images/logo.png"></td><td width=55%></td><td><?php echo"<font color=white>$row[name]</font>";?></td><td>

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
<!--cover-pic and dp-->
<?php $query1="select * from picture where username='$id'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
?>




<br><br><br><br><div class="content"><div class="cover_pic"><?php echo"<img src='$row1[coverpic]' width='100%' height=350px; >";?>
<div class="chngecover"><a href="#" id="pc"><img src="../images/001_45.png"></a></div>

<div class="dp"><?php echo"<img src='$row[screenshot]' width='145px' height=137px;>";?><div class="chngedp"><a href="#" id="dpp"><img src="../images/001_45.png"></a></div></div>
<!--menu-->





<table class="space"><tr><td width=17%></td><td>
<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
<?php

$words=explode("|",$row[services]);

?>


<!-- Start css3menu.com BODY section -->
<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu">

	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<?php for($i=0;$i<sizeof($words);$i++){
$data="insert".$words[$i].".php"; ?>
<li class="toplast"><a href="#" style="height:18px;line-height:18px;"><span><?php echo"$words[$i]"; ?></span></a>
	<ul>
			<li><a href="<?php echo$data; ?>">Insert Data</a></li>
			<li><a href="musicupdate.php">Update Data</a></li>
	</ul></li>

	<?php
	}
?>
</ul>
<!-- End css3menu.com BODY section -->

</td></tr></table>
</div>
<!--gallery and post-->
<div class="a"><div class="Gallery"><h2>Gallery</h2>
<?php
$query4="select * from gallery where username='$id'";
$result4=mysql_query($query4);

$cnt4=mysql_num_rows($result4);
if($cnt4==0)
{echo'<font color="#000000" size=3>Click on the button to create the gallery</font>';
}
else{

?>
<div>


<?php
while($row4=mysql_fetch_array($result4))
{

echo"<img src='$row4[screenshot]'style='float:left;width:60px;height:60px;'>"; }?></div>

<?php } ?>

<br><br><br><br><br><br>
<center><link rel="stylesheet" href="gall/mbcsmbinsmenu4.css" type="text/css" />


<div id="mbinsmenu4ebul_wrapper">
  <ul id="mbinsmenu4ebul_table" class="mbinsmenu4ebul_menulist css_menu">
  <li><a id="gal"><div class="buttonimg buttonimg_34" style="width: 110px; background-image: url('gall/mb_create_gallery.png')">Create Gallery</div></a></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="gall/mbjsmbinsmenu4.js"></script></center>
</div><div class="b"><div class="status"><table class="status1"><tr><td colspan="5"><textarea id="textstatus"></textarea></td><tr><!--<td><input type="checkbox">Sports</td><td><input type="checkbox">Dance</td><td><input type="checkbox">Music</td><td><input type="checkbox">Teachings</td>--><td><link rel="stylesheet" href="post/mbcsmbinsmenu0.css" type="text/css" />


<div id="mbinsmenu0ebul_wrapper">
  <ul id="mbinsmenu0ebul_table" class="mbinsmenu0ebul_menulist css_menu">
  <li><a  id="poststatus"><div class="buttonimg buttonimg_34" style="width: 54px; background-image: url('post/mb_post.png')">Post</div></a></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="post/mbjsmbinsmenu0.js"></script></td></tr></table></div></div>

<div class="updates" ><h1>Status</h1></div>
</div>
<div class="event_bar"><h1>Events</h1>
<?php
$query2="select * from event where username='$id'";
$result2=mysql_query($query2);
while($row2=mysql_fetch_array($result2)){
echo"<table id='events'><tr>";

?>
<td><?php echo"$row2[category]";?></td><td style="text-align:right;"><a href="eventupdate.php?x=<?php echo $row2[id];?>"><img src="../images/001_45.png"></a></td></tr>
<tr><td><?php echo "$row2[subcategory]";?></td><td style="text-align:right;"><a href="institute-event-delete.php?x=<?php echo $row2[id];?>"><img src="../images/delete_2.png"></a></td></tr>
<tr><td colspan=2><?php echo "$row2[eventdetail]";?></td>

<?php
echo"</tr></table><hr>";
}
?>

<br><br>
<link rel="stylesheet" href="create_event/mbcsmbrfzq.css" type="text/css" />


<div id="mbrfzqebul_wrapper">
  <ul id="mbrfzqebul_table" class="mbrfzqebul_menulist css_menu">
  <li><a href="insertevent.php"><div class="buttonimg buttonimg_34" style="width: 105px; background-image: url('create_event/mb_create_event.png')">Create Event</div></a></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="create_event/mbjsmbrfzq.js"></script>
</div>



</div>
<!-- coverpic popup-->
<div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<img src="../images/delete_2.png" style="float:right;" class="close">
<center><table height=100%><form enctype="multipart/form-data" action="institute-updte-coverpic.php" method="post">
<tr><th colspan=2>
<b><u>Change Cover Pic</u></b></th></tr>
<tr><td>

Upload Pic</td><td><input type="file" name="screenshot"></td></tr>
<tr><td colspan=2><center><input type="submit"></center>


</td></tr></form></table></center>

</div>

<!--dp popup-->
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog2" class="window2">
<img src="../images/delete_2.png" style="float:right;" class="close">
<center><table height=100%><form enctype="multipart/form-data" action="institute-updte-dppic.php" method="post">
<tr><th colspan=2>
<b><u>Change Profile Pic</u></b></th></tr>
<tr><td>

Upload Pic</td><td><input type="file" name="screenshot"></td></tr>
<tr><td colspan=2><center><input type="submit"></center>


</td></tr></form></table></center>

</div>

<!--gallery popup-->


<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog1" class="window1">
<img src="../images/delete_2.png" style="float:right;" class="close">
<center><table height=100%><form enctype="multipart/form-data" action="institute-insert-gallery.php" method="post">
<tr><th colspan=2>
<b><u>Create Gallery</u></b></th></tr>
<tr><td>



<tr><td>Category</td><td><select name="category">
<?php for($i=0;$i<sizeof($words);$i++){
 ?>
<option value="<?php echo$words[$i]; ?>"><?php echo"$words[$i]"; ?></options>
<?php
	}
?>
</select></td></tr>
<tr><td>Image</td><td><input type="file" name="screenshot"></td></tr>
<tr><td colspan=2><center><input type="submit"></center>


</td></tr></form></table></center>

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
header("location:../institute-login.php?x=$a");
}
?>