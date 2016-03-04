<?php
require'../database/dbmanager.php';
$dbm = new DBManager();
$conn = $dbm->getConnection();
session_start();

if (isset($_SESSION[id])){
$id=$_SESSION[id];
?>
<html>
<body>
<table width="1000px">
<tr><td>Category</td><td>image</td></tr>
<?php
$query="select * from gallery where username='$id'";
$result=mysql_query($query);
while ($row=mysql_fetch_array($result)){
echo"<tr>";
$folder=$id."/".$row[screenshot];?>
<td><?php echo "$row[category]";?></td>
<td><img src="<?php echo $folder;?>"></td>
<td><a href="institute-gallery-update.php?x=<?php echo $row[id];?>">Delete</a></td>
<?php
echo"</tr>";
}
?>
</table>
</body>
</html>
<?php
}
else{
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>
