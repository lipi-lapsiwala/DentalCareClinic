	<html>
<head>
	<title>
		Admin LogIn
	</title>
    
    <script language="javascript">
	
	function validateform()
	{
	
	var uname,pass;
	var err;
	err="";
	
	uname=document.forms["frmlogin"]["txtuname"].value;
	pass=document.forms["frmlogin"]["txtpass"].value;
	
	if(uname==null || uname=="")
	{
	err=err+"Fill Password..\n";
	}
	if(pass==null || pass=="")
	{
	err=err+"Fill Password..\n";
	}
	
	if(err.length>0)
	{
	alert(err);
	return false;
	}
	else
	{
	return true;
	}
	
	}
	
	</script>
</head>

<body>

<table align=center width=900 border=0 cellpadding=0 cellspacing=0>

<tr><td colspan=2>
	<?php
	include"header1.php";
	?>
</td></tr>


<tr><td><form method=post action=chkadlogin.php name="frmlogin" onSubmit="return validateform()">
		<table align=center width=300 cellpadding=5 cellspacing=0>
		
        <tr align="center"><td colspan=2>
			<br />
            <h3>Admin LogIn</h3>
           
        </td></tr>
		
        <tr><td>
			<b>Username :</b>
        </td><td>
			<?php
			if(isset($_COOKIE["una"]))
			{
			echo "<input type=text name=txtuname value=".$_COOKIE['una'].">";
			}
			else
			{
			echo "<input type=text name=txtuname>";
			}
			?>
		</td></tr>
		
        <tr><td>
			<b>Password :</b>
        </td><td>
			<?php
			if(isset($_COOKIE["unp"]))
			{
			echo "<input type=password name=txtpass value=".$_COOKIE['unp'].">";
			}
			else
			{
			echo "<input type=password name=txtpass>";
			}
			?>
		</td></tr>
		
        <tr align="center"><td colspan=2><label>
        	<input type="checkbox" name="chkremember" id="chkemember" value=checked>
			Remember me</label>
        </td></tr>
				
        <tr align="center"><td colspan="2">
        	<input type=submit name=submit value="Log In">
        </td></tr>
				
        <tr align="center"><td colspan=2>
        	<a href="forgot.php">Forgot Password??</a>
        </td></tr>
		
        </table>
		</form>
		
</td><td>&nbsp;
 	
</td></tr>

<tr><td colspan=2>
	<?php
	include"footer.php";
	?>
</td></tr>
		
</table>

</body>
</html>    