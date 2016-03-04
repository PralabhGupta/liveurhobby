<?php
  require '../database/dbmanager.php';
?>
<?php
session_start();






  $dbm = new DBManager();
    $conn = $dbm->getConnection();
$username=mysql_real_escape_string(trim($_POST[signnemail]));
$password=mysql_real_escape_string(trim($_POST[signnpassword]));
//echo"$username <br>$password";
$query="select * from institutelogin where username='$username' and password=SHA('$password')";
$result=mysql_query($query,$conn);
$count=mysql_num_rows($result);

if ($count==1){

$row=mysql_fetch_array($result);
if ($row[status]==1){
$_SESSION[id]=$row[username];
header("location:institute-profile.php");
}
else{
$a=md5(4);
header("location:../institute-login.php?x=$a");
}}
else{
$a=md5(5);
header("location:../institute-login.php?x=$a");
}
?>
