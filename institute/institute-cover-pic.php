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
<form enctype="multipart/form-data" action="institute-update-coverpic.php" method="post">
Upload Pic<input type="file" name="screenshot">
<input type="submit">
</form>
</body>
</html>
<?php
}
else
$a=md5(1);
header("location:../institute-login.php?x=$a");
}
?>