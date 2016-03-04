<?php
  require '../database/dbmanager.php';
?>
<?php
$dbm = new DBManager();
    $conn = $dbm->getConnection();
$username=mysql_real_escape_string(trim($_POST[username]));
$email=mysql_real_escape_string(trim($_POST[email]));
$password=mysql_real_escape_string(trim($_POST[password]));
if (!empty($username)&&(!empty($email))&&(!empty($password))){
$query="select * from institutelogin where username='$username'";
$result=mysql_query($query);
$cnt=mysql_num_rows($result);
if ($cnt){
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
else
{

$query="insert into institutelogin values(0,'$username',SHA('$password'),'$email','0')";
$query1="create table $username ( name varchar(2000), owner varchar (2000),housenumber varchar (2000),city varchar(2000),state varchar (2000),phone varchar (2000),email varchar (2000),year varchar (2000),services varchar (2000),screenshot varchar(2000),profilecounter varchar (100))";
$query7="insert into picture values (0,'$username','picture/coverpic.jpg','picture/dppic.jpg')";
$dir =$username;
if( is_dir($dir) === false ) { mkdir($dir); }
$result=mysql_query($query);
$result1=mysql_query($query1);
$result7=mysql_query($query7);
$query2="insert into $username values (' ',' ',' ',' ',' ',' ',' ', ' ',' ','picture/dppic.jpg ','0')";
$result2=mysql_query($query2);
$a=md5(2);

header("location:http://webseeth.com/activate.php?x=$username&y=$email&z=$password");
}
}
else{
$a=md5(3);
header("location:../institute-login.php?x=$a");
}
?>