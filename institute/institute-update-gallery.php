<?php
require'dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$category=$_POST[category];
$screenshot=$_FILES[screenshot][name];
$target=$id."/".$screenshot;
move_uploaded_file($_FILES[screenshot][tmp_name],$target);
$query="insert into gallery values (0,'$id','$category','$screenshot')";
$result=mysql_query($query);
header(location:insertgallery.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a);
?>

