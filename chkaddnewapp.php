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
include "connect.php";
session_start();
//$i=$_SESSION['i'];
//echo $_SESSION['i'];
$i=$_GET['id'];
 $appdate=$_POST['date'];
 $apptime=$_POST['time'];


// echo $appdate."<br>";
// echo $apptime."<br>";
 $query="update patient set day='$appdate',tym='$apptime',status=1 where id='$i'";
 $result=mysql_query($query) or die("Query error");

$q="select * from patient where id='$i'";
$r=mysql_query($q) or die("select error");

while($arr=mysql_fetch_array($r))
{
 $name=$arr['name'];
 $email=$arr['email'];
 $day=$arr['day'];
 $tym=$arr['tym'];
//echo $name."<br>".$email."<br>".$day."<br>".$tym;
}
//header("Location:newapplist.php");
$sub="Shraddha Dental Clinic";
$msg="Dear ".$name.",This mail is to notify you that your appointment at Sharddha dental Clinic is on ".$day." at ".$tym.".";
$head="Confirmation Of Your Appointment";
mail($email,$sub,$msg,$head);
echo "<br><center>Appointment date and time has been sent to patient's email address.</center><br>";
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