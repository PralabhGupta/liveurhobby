<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
//$dbc=mysqli_connect("localhost","root","","hobby");
session_start();
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$x=$_GET[x];
$y=$_GET[y];
$z=$_GET[z];
$query="insert into enroll values (0,'$x','$y','$z')";
$result=mysql_query($query);
header("location:user-event-view.php?a=1");
}
else
{
$a=md5(2);
heaser("location:user-login.php?x=$a");
}





?>