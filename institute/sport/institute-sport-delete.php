<?php
//require'dbmanager.php';
//$dbm = new DBManager();
//$conn = $dbm->getConnection();
session_start();
$dbc=mysqli_connect("localhost","root","","hobby");
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$x=$_GET[x];
$query="delete from sport where id='$x'";
$result=mysqli_query($dbc,$query);
header("location:sportupdate.php");
}
else
{
$a=md5(1);
header("location:institute-login.php?x=$a");
}?>.
