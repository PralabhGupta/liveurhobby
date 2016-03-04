<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$ide=$_POST[hidden];
$eventdetail=$_POST[eventdetail];
$category=$_POST[category];
$subcategory=$_POST[subcategory];
$query="update event set eventdetail='$eventdetail' where id='$ide'";
$query1="update event set category='$category' where id='$ide'";
$query2="update event set subcategory='$subcategory' where id='$ide'";
$result=mysql_query($query);
$result1=mysql_query($query1);
$result2=mysql_query($query2);
header("location:institute-events.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>