<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$x=$_GET[x];
$query="delete from music where id='$x'";
$result=mysql_query($query);
header("location:institute-service.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}?>.
