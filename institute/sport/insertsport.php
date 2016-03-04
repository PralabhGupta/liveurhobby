<?php
//require'dbmanager.php';
//$dbm = new DBManager();
//$conn = $dbm->getConnection();
session_start();
$dbc=mysqli_connect("localhost","root","","hobby");
if (isset($_SESSION[id])){
$id=$_SESSION[id];
?>
<html>
<body>
<form action="institute-insert-sport.php" method="post">
Course<input type="text" name="duration"><br>
Duration<input type="text" name="duration"><br>
fees<input type="text" name="fees"><br>
totalseats<input type="text" name="totalseats"><br>
Reamining<input type="text" name="remaining"><br>
Description<textarea rows="10" cols="20" name="description"></textarea><br>
Teacher name<input type="text" name="teachername"><br>
Contact<input type="text" name="contact"><br>

<input type="submit">
</form>
<br><br>
<a href="sportupdate.php">UpdateMusic</a>
</body>
</html>
<?php
}
else
{
$a=md5(1);
header("location:institute-login.php?x=$a");
}
?>
