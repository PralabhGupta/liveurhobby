<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
$ide=$_POST[hidden];
$course=$_POST[course];
$duration=$_POST[duration];
$fees=$_POST[fees];
$totalseats=$_POST[totalseats];
$remaining=$_POST[remaining];
$teachername=$_POST[teachername];
$contact=$_POST[contact];
$description=$_POST[description];
$query="update music set course='$course' where id='$ide'";
$query1="update music set duration='$duration' where id='$ide'";
$query2="update music set fees='$fees' where id='$ide'";
$query3="update music set totalseats='$totalseats' where id='$ide'";
$query4="update music set remaining='$remaining' where id='$ide'";
$query5="update music set teachername='$teachername' where id='$ide'";
$query6="update music set contact='$contact' where id='$ide'";
$query7="update music set description='$description' where id='$ide'";
$result=mysql_query($query);
$result1=mysql_query($query1);
$result2=mysql_query($query2);
$result3=mysql_query($query3);
$result4=mysql_query($query4);
$result5=mysql_query($query5);
$result6=mysql_query($query6);
$result7=mysql_query($query7);
header("location:institute-service.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>