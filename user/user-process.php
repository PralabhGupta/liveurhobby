<?php
  require '../database/dbmanager.php';
?>
<?php
$dbm = new DBManager();
    $conn = $dbm->getConnection();
//$dbc=mysqli_connect("localhost","root","","hobby");
$username=mysql_real_escape_string(trim($_POST[username]));
$email=mysql_real_escape_string(trim($_POST[email]));
$password=mysql_real_escape_string(trim($_POST[password]));
if (!empty($username)&&(!empty($email))&&(!empty($password))){
$query="select * from userlogin where username='$username'";
$query10="select * from institutelogin where username='$username'";
$result=mysql_query($query);
$cnt=mysql_num_rows($result);
$result10=mysql_query($query10);
$cnt1=mysql_num_rows($result10);
if ($cnt || $cnt1){
$a=md5(1);
header("location:../user-login.php?x=$a");
}
else
{

$query="insert into userlogin values(0,'$username',SHA('$password'),'$email')";
$query1="create table $username (name varchar(2000), owner varchar (2000),housenumber varchar (2000),city varchar(2000),state varchar (2000),phone varchar (2000),email varchar (2000),year varchar (2000),screenshot varchar(2000))";
$result=mysql_query($query);
$result1=mysql_query($query1);
$query2="insert into $username values (' ',' ',' ',' ',' ',' ',' ',' ','picture/dppic.jpg')";
$result2=mysql_query($query2);
$a=md5(2);
header("location:../user-login.php?x=$a");
}
}
else{
$a=md5(3);
header("location:../user-login.php?x=$a");
}
?>