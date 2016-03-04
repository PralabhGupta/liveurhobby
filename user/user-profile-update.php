<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();
if (isset($_SESSION[id])){
$id=$_SESSION[id];
//$dbc=mysqli_connect("localhost","root","","hobby");
$name=$_POST[name];
$owner=$_POST[owner];
$housenumber=$_POST[housenumber];
$city=$_POST[city];
$state=$_POST[state];
$phone=$_POST[phone];
$email=$_POST[email];
$year=$_POST[year];
$screenshot=$_FILES[screenshot][name];
$query="update $id set name='$name'";
$query1="update $id set owner='$owner'";
$query2="update $id set housenumber='$housenumber'";
$query3="update $id set city='$city'";
$query4="update $id set state='$state'";
$query5="update $id set phone='$phone'";
$query6="update $id set email='$email'";
$target="picture"."/".$screenshot;
$query7="update $id set screenshot='$target'";
$query9="update $id set year='$year'";
$result=mysql_query($query);
$result1=mysql_query($query1);
$result2=mysql_query($query2);
$result3=mysql_query($query3);
$result4=mysql_query($query4);
$result5=mysql_query($query5);
$result6=mysql_query($query6);
if (!empty($screenshot)){
$target="picture"."/".$screenshot;
move_uploaded_file($_FILES[screenshot][tmp_name],$target);
$result7=mysql_query($query7);}
$result9=mysql_query($query9);
header("location:user-account.php");}
else{
$a=md5(1);
header("location:../user-login.php?x=$a");}
?>











