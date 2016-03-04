<?php
$username=$_GET[x];
$email=$_GET[y];
$password=$_GET[z];
$to="$email";
$subject="Live Your Hobby";
$msg="Hi  ".$username."\n\n"."Please click on the link to activate your account"."\n\n"."https://liveurhobbyapp.mybluemix.net/institute/institute-activate.php?x=$username&y=$password";
$name="LiveUrHobby";
mail($to,$subject,$msg,'From:'.$name);
$a=md5(2);
header("location:https://liveurhobbyapp.mybluemix.net/institute-login.php?x=$a");
?>