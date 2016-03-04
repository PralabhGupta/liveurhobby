<?php
  require '../database/dbmanager.php';
?>
<?php

session_start();
if (isset($_SESSION[id])){
//$id=$_SESSION[id];
//$dbm = new DBManager();
   // $conn = $dbm->getConnection();
//$query="update online_users set active=0 where id='$id'";
//$result=mysql_query($query);
$_SESSION=array();
unset($_SESSION[id]);}
header("location:../index.html");
?>



