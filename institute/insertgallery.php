<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
?>
<html>
<body>
<form enctype="multipart/form-data" action="institute-insert-gallery.php" method="post">
Category<input type="text" name="category"><br>
Image<input type="file" name="screenshot">
<input type="submit">
</form><br><br>
<a href="galleryupdate.php">Update</a>
</body>
</html>
<?php
}
else{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>

