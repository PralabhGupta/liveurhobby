<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();
//$dbc=mysqli_connect("localhost","root","","hobby");
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$query="select * from $id";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$comment=$_POST[comment];
$hidden=$_POST[hidden];
$query3="insert into comment values('$hidden','$id','$comment')";
$result3=mysql_query($query3);
header("location:user-news-feed.php");
}
else {
$a=md5(1);
header("location:user-login.php?x=$a");
}
?>
