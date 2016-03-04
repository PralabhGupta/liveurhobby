<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$screenshot=$_FILES[screenshot][name];

$target="picture/".$screenshot;

move_uploaded_file($_FILES[screenshot][tmp_name],$target);
$screenshot1="picture/".$screenshot;
$query="update $id set screenshot='$screenshot1'";
$result=mysql_query($query);
$query1="update $id set dppic='$screenshot1'";
$result1=mysql_query($query1);
header("location:user-account.php");
}
else
{
$a=md5(1);
header("location:../user-login.php?x=$a");
}
?>
