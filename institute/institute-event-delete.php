<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();
//$dbc=mysqli_connect("localhost","root","","hobby");
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$x=$_GET[x];
//echo"$x";
$query="delete from event where id='$x'";
$result=mysql_query($query);
header("location:institute-events.php");
}
else {
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>