<?php
include"connect.php";
if(isset($_GET['i']))
{
session_start();
$i=$_GET['i'];
$_SESSION['i']=$i;
$q="select * from patient where id=$i";
$res=mysql_query($q) or die("Select Query error");
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Patient's Details</title>
</head>
<body>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php
    require "header2.php";
	?></td>
  </tr>
  
<tr><td colspan=2>
<?php
if(isset($_GET['i']))
{

echo "<table align=center width=400 border=0 cellspacing=0 cellpadding=5>";

while($array=mysql_fetch_array($res))
{
echo "<tr align=center><td colspan=2><br>";
echo "<h3>Patient's Profile</h3>";
echo "</td></tr>";
echo "<form name=frmedit method=post action=edit.php>";
echo "<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
	
echo "<tr>";
echo "<td width=40%>";
echo "<b>Full Name:</b>";
echo "</td>";
echo "<td width=60%>";
echo "<input type=text name=name value=".$array['name'].">";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>E-Mail:</b>";
echo "</td>";
echo "<td>";
echo "<input type=text name=email value=".$array['email'].">";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>Date of Birthday:</b>";
echo "</td>";
echo "<td>";
echo "<input type=text name=dob value=".$array['dob'].">";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>Address:</b>";
echo "</td>";
echo "<td>";
echo "<input type=text name=addr value=".$array['addr'].">";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>Contact Number:</b>";
echo "</td>";
echo "<td>";
echo "<input type=text name=phone value=".$array['phone'].">";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan=2 align=center>";
echo "<input type=submit name=submit value=' Edit '>";
echo "</td>";
echo "</tr>";


}
echo "</table>";
}
if(isset($_POST['submit']))
{

 session_start();
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $addr=$_POST['addr'];
 $dob=$_POST['dob'];
 $i=$_SESSION['i'];
// echo $i;
 $query="update patient set name='$name',email='$email',phone='$phone',addr='$addr',dob='$dob' where id='$i'";
 $result=mysql_query($query) or die("update error");
echo "<br><br><center>Your Profile Has Been Successfully Updated.</center><br>";

 header("Location:addnewapp.php?i=".$i);
}
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