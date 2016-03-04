<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$username=$id;
$detail=$_POST[text];
$category=$_POST[category];
$subcategory=$_POST[subcategory];
$query="insert into event values(0,'$username','$detail','$category','$subcategory')";
$result=mysql_query($query);
header("location:institute-events.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>