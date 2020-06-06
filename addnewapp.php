<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Appointment</title>
</head>
<body>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php
    require "header2.php";
	?></td>
  </tr>
  
<tr><td colspan=2>
<br>
<?php
include"connect.php";
session_start();
$i=$_GET['i'];
$_SESSION['i']=$i;
//echo $_SESSION['i'];
$q="select * from patient where id=$i";
$res=mysql_query($q) or die("Select Query error");

echo "<table align=center width=400 border=0 cellspacing=0 cellpadding=5>";

while($array=mysql_fetch_array($res))
{
echo "<tr align=center><td colspan=2>";
echo "<h3>Your Profile</h3>";
echo "</td></tr>";

echo "<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
	
echo "<tr>";
echo "<td width=40%>";
echo "<b>Name:</b>";
echo "</td>";
echo "<td width=60%>";
echo $array['name'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>E-Mail:</b>";
echo "</td>";
echo "<td>";
echo $array['email'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>Date of Birthday:</b>";
echo "</td>";
echo "<td>";
echo $array['dob'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>Address:</b>";
echo "</td>";
echo "<td>";
echo $array['addr'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>Contact Number:</b>";
echo "</td>";
echo "<td>";
echo $array['phone'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "&nbsp;";
echo "</td>";
echo "<td>";
echo "&nbsp;";
echo "</td>";
echo "</tr>";

echo "<tr align=center>";
echo "<td colspan=2>";

echo "<form action=chkaddnewapp.php?id=".$i." method=post>

<table align=center width=300 cellpedding=5 cellspacing=0 border=0>

<tr align=center><td colspan=2>
	
	<h3>Add Appointment</h3>
</td></tr>

<tr><td width=35%><b>Date:</b></td>

	<td width=65%><input type=date name=date required></td></tr>

<tr><td><b>Time:</b></td>

	<td><input type=time name=time required>
</td></tr>

<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";

echo "<tr align=center><td colspan=2><input type=submit value='Add Appointment'></td></tr>"; 
echo "</table>";
echo "</form>";

echo "</td>";
echo "</tr>";

}
echo "</table>";
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