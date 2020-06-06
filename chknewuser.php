<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Patient</title>
</head>

<body>

<table width=900 align=center cellpadding=0 cellspacing=0 border=0>

<tr><td><div>
	<?php
	include"header1.php";
	?>
	</div>
</td></tr>

<tr></td>&nbsp;</t></tr>

<tr><td>

<table align=center width=500 border=0 cellpadding=5 cellspacing=0>

<tr></td>&nbsp;</t></tr>

<?php

$fname=$_POST["txtfname"];
$lname=$_POST["txtlname"];
$name1=array($fname,$lname);
$name=implode(" ",$name1);
//echo $name."<br>";

$email=$_POST["txtemail"];
//echo $email."<br>";

$d=$_POST["txtday"];
$m=$_POST["txtmonth"];
$yr=$_POST["txtyr"];
$i=array($d,$m,$yr);
//$dob=implode("-",$i);
//echo $dob."<br>";
$dob=$d."-".$m."-".$yr;

$prof=$_POST["txtprof"];
//echo $prof."<br>";

$houseno=$_POST["txthouseno"];
$socname=$_POST["txtsocname"];
$area=$_POST["txtarea"];
$city=$_POST["selcity"];
$state=$_POST["selstate"];
$zip=$_POST["txtzip"];
$addr=array($houseno,$socname,$area,$city,$state,"India");
//$add=implode(", ",$addr);
$add=$houseno." ".$socname." ".$area." ".$city." ".$state." ".$zip." India";
//echo $add."<br>";

$phone=$_POST["txtphone"];
$treat=$_POST["seltreat"];
//echo $treat;

$d=strtotime("+5 hours 30 minutes");
$day=date("d-m-Y",$d);
$tym=date("g.i a",$d);
//echo $date."<br>";
//echo $time;

//$prob=$_POST["txtprob"];

include"connect.php";
$q="select * from patient where name='$name'";
$res=mysql_query($q) or die("Query error..");
$cnt=mysql_num_rows($res);

if($cnt>0)
{
echo "<tr align=center><td>Patient with same name already Exists.</td></tr>";
echo "<tr align=center><td><a href=newuser.php>Try Again</a></td></tr>";
}
else
{

$q1="insert into patient (name,email,dob,profession,addr,zip,phone) values('$name','$email','$dob','$prof','$add','$zip','$phone')";
$res1=mysql_query($q1) or die("Query error..");
echo "<tr align=center><td>Patient Has Been Added Successfully.</td></tr>";

header("Location:newuser.php");
}

?>
</table>
<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td>
	<?php
    include"footer.php";
    ?>
</table>

</body>
</html>