<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Existing Patient's List</title>
 <link href="themes/css1.css" rel="stylesheet" type="text/css" />
 <script src="themes/jscript1.js" type="text/javascript"></script>
 <link href="themes/generic.css" rel="stylesheet" type="text/css" />

<body>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php
    require "header1.php";
	?></td>
  </tr>
  
  <tr>
    <td><table align="center" width="900" cellpadding="5" cellspacing="0" border="1">
	<br><?php
	
	include"connect.php";
	$q="select * from patient where status=1";
	$res=mysql_query($q) or die("Query error..");
	$cnt=mysql_num_rows($res);
	$i=1;
	if($cnt>0)
	{
	
	echo "<tr>";
	
	echo "<th>";
	echo "No.";
	echo "</th>";
	echo "<th>";
	echo "Name";
	echo "</th>";
	echo "<th>";
	echo "E-Mail";
	echo "</th>";
	echo "<th>";
	echo "Contact No";
	echo "</th>";
	echo "<th>";
	echo "Appointment Date";
	echo "</th>";
	echo "<th>";
	echo "Appointment Time";
	echo "</th>";

	echo "</tr>";
	
	while($arr=mysql_fetch_array($res))
	{
	echo "<tr>";
	
	echo "<td>";
	echo $i;
	echo "</td>";
	echo "<td>";
	echo $arr['name'];
	echo "</td>";
	echo "<td>";
	echo $arr['email'];
	echo "</td>";
	echo "<td>";
	echo $arr['phone'];
	echo "</td>";
	echo "<td>";
	echo $arr['day'];
	echo "</td>";
	echo "<td>";
	echo $arr['tym'];
	echo "</td>";
		
	echo "</tr>";
	$i++;
	}
	}
	else 
	{
	echo "No patients are there..";
	}
	
	?>
    
    
    </table></td>
    <td>&nbsp;</td>
  </tr>
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
