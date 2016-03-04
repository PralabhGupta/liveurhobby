<?php
  require '../database/dbmanager.php';
?>
<?php
$dbm = new DBManager();
    $conn = $dbm->getConnection();
session_start();
//$dbc=mysqli_connect("localhost","root","","hobby");
$username=mysql_real_escape_string(trim($_POST[signnemail]));
$password=mysql_real_escape_string(trim($_POST[signnpassword]));

$query="select * from userlogin where username='$username' and password=SHA('$password')";
$result=mysql_query($query);
$count=mysql_num_rows($result);
//echo"$query";
if ($count==1){
$row=mysql_fetch_array($result);
$_SESSION[id]=$row[username];
header("location:user-account.php");
}
else{
$a=md5(4);
header("location:../user-login.php?x=$a");
}
?>
