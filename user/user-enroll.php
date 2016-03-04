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
$w=$_GET[w];
$query="insert into enroll values (0,'$x','$y','$z')";
$result=mysql_query($query);
$query1="select * from $z where id='$w'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
$totalseats=$row1[totalseats];
$totalseats=$totalseats-1;
$query2="update $z set totalseats='$totalseats' where id='$w'";
$result2=mysql_query($query2);
header("location:user-service.php?a=1");
}
else
{
$a=md5(2);
heaser("location:user-login.php?x=$a");
}





?>