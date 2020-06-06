<html>
<head>
<title>Forgot Password</title>
</head>
<body>

<table align=center width=900 border=0 cellpadding=5 cellspacing=0>

<tr><td>
	<?php
	include"header1.php";
	?>
</td></tr>
<tr><td>&nbsp;</td></tr>

<tr align=center><td>
<table align=center width=500 border=0 cellpadding=5 cellspacing=0>
<tr align="center"><td>

<?php

if(!isset($_POST["submit"]))
{
header("Location:forgot.php");
}

$uname=$_POST["txtuname"];

include"connect.php";
$q="select * from admin where uname='$uname'";
$result=mysql_query($q) or die("Query error..");

$cnt=mysql_num_rows($result);

if($cnt>0)
{
while($arr=mysql_fetch_array($result))
{
echo "<b><u>Your Password is</u> : </b>".$arr['pass'];
echo "</td></tr><tr align=center><td>";
echo "<a href=adminlogin.php>LogIn Again</a></td></tr>";
}
}
else
{
echo "Invalid Username</tr></td>";
echo "<tr align=center><td><a href=forgot.php>Try Again</a>";
}
?>
</td></tr>

<tr><td>
	<?php
	include"footer.php";
	?>
</td></tr>
</table>
</body>
</html>