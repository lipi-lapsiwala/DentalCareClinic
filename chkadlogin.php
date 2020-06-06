<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin LogIn</title>
</head>

<body>

<?php
session_start();

if(!isset($_POST["submit"]))
{
header("Location:adminlogin.php");
}

$uname=$_POST["txtuname"];
$pass=$_POST["txtpass"];

if(isset($_POST["chkremember"]))
{
//echo $_POST["chkremember"]."<br>";
setcookie("una",$uname,time()+60);
setcookie("unp",$pass,time()+60);
}
//echo $uname."<br>";
//echo $pass."<br>";
include"connect.php";
$q="select * from admin where uname='$uname' and pass='$pass'";
$result=mysql_query($q) or die("Query error..");
$cnt=mysql_num_rows($result);

if($cnt>0)
{
$_SESSION["un2"]=$uname;
//echo $_SESSION["un1"];
echo "
<table width=900 align=center cellpadding=0 cellspacing=0 border=0>

<tr><td><div>
";	
	include "header2.php";
echo "		</div>
</td></tr>
        

<tr align=center><td>
	<table width=600 border=0 cellspacing=0 cellpadding=5>
<tr><td>
<br>
  <br>
  <marquee>
  <h1>Welcome</h1>
  </marquee>
  <br>
  <br>
";      

header("Location:adminhome.php");
}
else
{echo "
<table width=900 align=center cellpadding=0 cellspacing=0 border=0>

<tr><td><div>
";	
	include "header1.php";
echo "		</div>
</td></tr>
        

<tr align=center><td>
	<table align=center width=600 border=0 cellspacing=0 cellpadding=5>
<tr><td>&nbsp;</td></tr>
<tr align=center><td>";      

echo "Invalid Username or Password</td></tr>";
echo "<tr align=center><td><a href=adminlogin.php>LogIn Again</a></td></tr>";
}


?>

    </table>
</td>
</tr>

<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td>
	<?php
    include"footer.php";
    ?>
</table>

</body>
</html>