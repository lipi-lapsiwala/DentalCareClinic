<?php
session_start();
$un1=$_SESSION["un2"];
//echo $un1;
include "connect.php";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>

</head>

<body>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php
    require "header2.php";
	?></td>
  </tr>
  
<tr><td>

<?php
$drfname=$_POST["txtdrfname"];
$drlname=$_POST["txtdrlname"];
$dr=array("Dr.",$drfname,$drlname);
$drname=implode(" ",$dr);
//echo $drname."<br>";

//$uname=$_POST["txtuname"];
//$pass=$_POST["txtpass"];
//echo $uname."<br>";
//echo $pass."<br>";

$cname=$_POST["txtcname"];
//echo $cname."<br>";

$shopno=$_POST["txtshopno"];
$complex=$_POST["txtcomplex"];
$area=$_POST["txtarea"];
$city=$_POST["selcity"];
$state=$_POST["selstate"];
$add1=array($shopno,$complex,$area,$city,$state,"India.");
$add=implode(",",$add1);
//echo $add."<br>";

$zip=$_POST["txtzip"];
//echo $zip."<br>";
$phone=$_POST["txtphone"];
//echo $phone."<br>";

//$gender=$_POST["radgender"];
//echo $gender."<br>";

$bechlor=$_POST["txtbechlor"];
$masters=$_POST["txtmasters"];
$deg=array($bechlor,$masters);
$degree=implode(" ",$deg);
//echo $degree."<br>";

$expyr=$_POST["selexpyr"];
$expcomp=$_POST["txtexpcomp"];
$exp1=array($expyr,$expcomp);
$exp=implode(" ",$exp1);
//echo $exp."<br>";

//include"connect.php";
$q="update admin set drname='$drname',cname='$cname',addr='$add',zip='$zip',phone='$phone',degree='$degree',exp='$exp' where uname='admin'";
$res=mysql_query($q) or die("query error..");
echo "<br><center>Your Profile Has Been Updated Successfully.</center>";
echo "<br>";
echo "<center><a href=viewprofile.php>View Your Profile</a></center>";
header("Location:viewprofile.php");

?>

</td></tr>

<tr>
    <td colspan="2">
      <?php
      include"footer.php";
      ?>
    </td>
  </tr>
</table>

</body>
</html>