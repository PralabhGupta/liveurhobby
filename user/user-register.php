
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {

		var id = '#dialog';

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

	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();

		$('#mask').hide();
		$('.window').hide();
	});

	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});

});

</script>

<style type="text/css">
body {
font-family:verdana;
font-size:15px;
}

a {color:#333; text-decoration:none}
a:hover {color:#ccc; text-decoration:none}

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}
#boxes #dialog {
  width:375px;
  height:203px;
  padding:10px;
  background-color:#ffffff;
}
</style>
</head>
<body>
<div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<br><br><br>
<center><table><tr><td>

<?php
$x=$_GET[x];
if($x==md5(1))
echo"User already exist";
if($x==md5(2))
echo"User created successfully";
if ($x==md5(3))
echo"Please Fill all the fields";
?>
</td></tr>
<tr><td><form action="user-process.php" method="post">
<b>Username</b></td><td><input type="text" name="username" placeholder="Enter" required="required" /><br></td></tr>
<tr><td><b>Email</b></td><td><input type="email" name="email" placeholder="Enter" required="required" /><br></td></tr>
<tr><td><b>Password</b></td><td><input type="password" name="password" placeholder="Enter" required="required" /><br></td></tr>
<tr><td colspan="2"><input type="submit" name="submit"></td></tr>
</form>
</table></center>








</div>
<!-- Mask to cover the whole screen -->
<a href="index.html" class="">

<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
</a>
















</body>
</html>
