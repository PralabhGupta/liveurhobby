<?php
  require '../database/dbmanager.php';
?>
<?php

  $dbm = new DBManager();
    $conn = $dbm->getConnection();
$username=$_GET[x];
$password=$_GET[y];

$query="select * from institutelogin where username='$username' and password=SHA('$password')";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if ($count==1){
$query1="update institutelogin set status='1' where username='$username'";
mysql_query($query1);
$a=md5(6);
header("location:../institute-login.php?x=$a");
}
else{
$a=md5(4);
header("location:../institute-login.php?x=$a");
}
?>
