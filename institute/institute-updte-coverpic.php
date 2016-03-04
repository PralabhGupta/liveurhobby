<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$screenshot=$_FILES[screenshot][name];
$target=$id."/".$screenshot;
move_uploaded_file($_FILES[screenshot][tmp_name],$target);
$screenshot1=$id."/".$screenshot;
$query="update picture set coverpic='$screenshot1' where username='$id'";
$result=mysql_query($query);
header("location:institute-account.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>
