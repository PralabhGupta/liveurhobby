<?php
  require '../database/dbmanager.php';
?>
<?php
session_start();
if (isset($_SESSION[id])){
$id=$_SESSION[id];


$dbm = new DBManager();
    $conn = $dbm->getConnection();
$name=$_POST[name];
$owner=$_POST[owner];
$housenumber=$_POST[housenumber];
$city=$_POST[city];
$state=$_POST[state];
$phone=$_POST[phone];
$email=$_POST[email];
$year=$_POST[year];
for ($j=1;$j<=4;$j++){
$res="r".$j;
$data[$j]=$_POST[$res];}
$services="";
for ($j=1;$j<=4;$j++){
if (!empty($data[$j])){
$services=$services."|".$data[$j];}}
$screenshot=$_FILES[screenshot][name];
$target=$id."/".$screenshot;
move_uploaded_file($_FILES[screenshot][tmp_name],$target);
$query="update $id set name='$name'";
$query1="update $id set owner='$owner'";
$query2="update $id set housenumber='$housenumber'";
$query3="update $id set city='$city'";
$query4="update $id set state='$state'";
$query5="update $id set phone='$phone'";
$query6="update $id set email='$email'";
$query7="update $id set screenshot='$target'";
$query8="update $id set services='$services'";
$query9="update $id set year='$year'";
$query10="update $id set profilecounter='1'";
$result=mysql_query($query);
$result1=mysql_query($query1);
$result2=mysql_query($query2);
$result3=mysql_query($query3);
$result4=mysql_query($query4);
$result5=mysql_query($query5);
$result6=mysql_query($query6);
if (!empty($screenshot)){
$result7=mysql_query($query7);}
$result8=mysql_query($query8);
$result9=mysql_query($query9);
$result10=mysql_query($query10);
header("location:institute-profile.php");
}
else
{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>











