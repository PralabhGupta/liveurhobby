<?php
//require'dbmanager.php';
//$dbm = new DBManager();
//$conn = $dbm->getConnection();
session_start();
$dbc=mysqli_connect("localhost","root","","hobby");
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$username=$id;
$course=$_POST[course];
$duration=$_POST[duration];
$fees=$_POST[fees];
$totalseats=$_POST[totalseats];
$remaining=$_POST[remaining];
$description=$_POST[description];
$teachername=$_POST[teachername];
$contact=$_POST[contact];
$query="insert into sport values(0,'$username','$course','$duration','$fees','$totalseats','$remaining','$description','$teachername','$contact')";
$result=mysqli_query($dbc,$query);
header("location:insertsport.php");
}
else
{
$a=md5(1);
header("location:institute-login.php?x=$a");
}
?>