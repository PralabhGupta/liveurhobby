<?php
  require '../database/dbmanager.php';
?>
<?php



session_start();
if (isset($_SESSION[id])){
$id=$_SESSION[id];
$dbm = new DBManager();
    $conn = $dbm->getConnection();
$query="select * from $id";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row[profilecounter]==0){
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script src="js/profile.js"></script>


<link rel="stylesheet" href="css/profile.css" type="text/css" />
</head><body>
<!--menu-->
<link rel="stylesheet" href="mbcsmbuw9y.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:bold">


<div id="mbuw9yebul_wrapper">
  <ul id="mbuw9yebul_table" class="mbuw9yebul_menulist css_menu">
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="icon_2 buttonbg" style="width: 92px;"><a class="button_2"></a></div></li>
  <li><div class="icon_3 buttonbg" style="width: 340px;"><a class="button_3"></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  <li><div class="buttonbg" style="width: 158px;"><a class="button_15"><?php echo"<font color=white size=4>$row[name]</font>";?></a></div></li>
<li><div class="arrow buttonbg" style="width: 111px;"><a class="button_16">Profile</a></div>
    <ul>


    <li><a title="">Change Password</a></li>
    </ul></li>
  <li><div class="buttonbg" style="width: 97px;"><a href="institute-logout.php" class="button_17">Logout</a></div></li>
  <li><div class="buttonbg"><a></a></div></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="mbjsmbuw9y.js"></script>
<center><div id="boxes">
<div style=" top:150px;display: none;" id="dialog" class="window">
<center>
<div class="container">
<form enctype="multipart/form-data" action="institute-update.php" method="post" id="frm">
<table style="width:550px;font-size:15pt;" cellpadding=10>
<tr><th colspan="2"><font size=5 align=center><u>Complete Your Profile</u></font></th></tr>

<tr height="50px">
<td><label class="s"><b>Institute Name</b></label></td><td><input type="text" name="name" placeholder="Institute Name" id="iname"></td></tr>

<tr height="50px">
<td><label class="s"><b>Owner Name</b></label></td><td><input type="text" name="owner" placeholder="Owner Name" id="oname"><br><span></span></td></tr>
<tr height="50px">
<td><label class="s"><b>Office Address</b></label></td><td><input type="text" name="housenumber" placeholder="Office Address" id="hno"><br><span></span></td></tr>
<tr height="50px">
<td><label class="s"><b>State</b></label></td><td><select name="state" id="state">
<option value="">Select State</option>
<script language="javascript">
var states = new Array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");
for(var hi=0; hi<states.length; hi++)
document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
</script>
</select></td></tr>
<tr height="50px">
<td><label class="s"><b>City</b></label></td><td><select name="city" id="city">
<option value="">Select City</option>
<option value="Meerut">Meerut</option>
<option value="Ghaziabad">Ghaziabad</option>
<option value="Saharanpur">Saharanpur</option>
<option value="Modinagar">Modinagar</option>
<option value="Muzaffarnagar">Muzaffarnagar</option>
</select></td></tr>
<tr height="50px">
<td><label class="s"><b>Phone</b></label></td><td><input type="phone" name="phone" id="phone" maxlength="10" placeholder="Mobile Number"><br><span></span></td></tr>
<tr height="50px">
<td><label class="s"><b>Email</b></label></td><td><input type="email" name="email"  id="email" placeholder="Email Address"><br><span></span></td></tr>
<tr height="50px">
<td><label class="s"><b>Started in year</b></label></td><td><select id="yr" name="year">
	<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	<option value="1904">1904</option>
	<option value="1903">1903</option>
	<option value="1902">1902</option>
	<option value="1901">1901</option>
	<option value="1900">1900</option>
   </select></td></tr>
<tr height="50px">
<td class="a"><label class="s"><b>Services</b></label></td>
<td><input type="checkbox" name="r1" value="music" id="music"><b>Music</b>
<input type="checkbox" name="r2" value="dance" id="dance"><b>Dance</b>
<input type="checkbox" name="r3" value="art" id="teach"><b>Art</b>
<input type="checkbox" name="r4" value="sports" id="sport"><b>Sports</b><br><span></span></td></tr>
<tr height="50px">
<td><label class="s"><b>Profile Pic</b></label></td><td><input type="file" name="screenshot"></td></tr>
<tr height="50px">
<td colspan="2"><center><input type="submit" id="sub"></center></td></tr></table>
</form></div>
</center>
</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.9;" id="mask"></div>
</div>
</center>
<body></html>
<?php
}
else
header("location:institute-account.php");
}
else{

header("location:../index.html");
}
?>