<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();
//$dbc=mysqli_connect("localhost","root","","hobby");
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$y=$_GET[y];
$query2="select * from post where id='$y'";
$result2=mysql_query($query2);
$row=mysql_fetch_array($result2);
$like=$row[likes];
$like=$like+1;
//echo"$like";
$query4="update post set likes='$like' where id='$y'";
$result4=mysql_query($query4);
header("location:institute-feed.php");}
else{
$a=md5(1);
header("location:institute-login.php?x=$a");
}
?>