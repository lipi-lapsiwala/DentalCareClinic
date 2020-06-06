<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Profile</title>
 
</head>

<body>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
<tr><td colspan="2">
	<?php
    include"header2.php";
	?>
</td></tr>



<tr align="center"><td colspan=2>
<table align=center width=400 border=0 cellspacing=0 cellpadding=5>
	<?php
	session_start();
	$un1=$_SESSION["un2"];
	echo $un1;
	
	include"connect.php";
	$q="select * from admin where uname='admin'";
	$result=mysql_query($q) or die("Query error..");
	
	
	while($array=mysql_fetch_array($result))
	{
?>
<tr><td colspan=2>&nbsp;</td></tr>
<tr align=center><td colspan=2>
	<h3>Your Profile</h3>
</td></tr>
	
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	
<tr><td width=40%>
	<b>Name:</b>
</td><td width=60%>
	<?php
	echo $array['drname'];
	?>

</td></tr>
	
<tr><td>
	<b>Clinic's Name:</b>
</td><td>
	<?php
	echo $array['cname'];
	?>

</td></tr>
	
<tr><td>
	<b>Clinic Address:</b>
</td><td>
	<?php
	echo $array['addr'];
	echo $array['zip'];
	?>
</td></tr>

<tr><td>
	<b>Phone No:</b>
</td><td>
	<?php
	echo $array['phone'];
	?>
</td></tr>
	
<tr><td>
	<b>Degree:</b>
</td><td>
	<?php
	echo $array['degree'];
	?>
</td></tr>
	
<tr><td>
	<b>Experience:</b>
</td><td>
	<?php
	echo $array['exp'];
	?>
</td></tr>
	<?php
	}
	?>
</table>
</td></tr>


<tr><td><div class=div1>
  <p><a href=editprofile.php>Edit Your Profile</a></p>
	</div>
</td><td>

<tr><td colspan="2">
	<?php
    include"footer.php";
    ?>
</td></tr>

</table>
</body>
</html>