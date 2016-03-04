<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();
//$dbc=mysqli_connect("localhost","root","","hobby");
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
$query="update sport set course='$course' where id='$ide'";
$query1="update sport set duration='$duration' where id='$ide'";
$query2="update sport set fees='$fees' where id='$ide'";
$query3="update sport set totalseats='$totalseats' where id='$ide'";
$query4="update sport set remaining='$remaining' where id='$ide'";
$query5="update sport set teachername='$teachername' where id='$ide'";
$query6="update sport set contact='$contact' where id='$ide'";
$query7="update sport set description='$description' where id='$ide'";
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
header("location:institute-login.php?x=$a");
}
?>