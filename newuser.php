<html>
<head>
<title>New User</title>
<script language="javascript">
 function validateform()
	{
	var fname,lname,email,day,month,yr,prof,houseno,socname,area,zip,phone;
	var err;
	err="";
	
	fname=document.forms["frmnewuser"]["txtfname"].value;
	lname=document.forms["frmnewuser"]["txtlname"].value;
	email=document.forms["frmnewuser"]["txtemail"].value;
	day=document.forms["frmnewuser"]["txtday"].value;
	month=document.forms["frmnewuser"]["txtmonth"].value;
	yr=document.forms["frmnewuser"]["txtyr"].value;
	prof=document.forms["frmnewuser"]["txtprof"].value;
	houseno=document.forms["frmnewuser"]["txthouseno"].value;
	socname=document.forms["frmnewuser"]["txtsocname"].value;
	area=document.forms["frmnewuser"]["txtarea"].value;
	zip=document.forms["frmnewuser"]["txtzip"].value;
	phone=document.forms["frmnewuser"]["txtphone"].value;
	
	if(fname==null || fname=="")
	{
	err=err+"Fill First Name..\n";
	}
	if(lname==null || lname=="")
	{
	err=err+"Fill Last Name..\n";
	}
	if(email==null || email=="")
	{
	err=err+"Fill E-Mail..\n";
	}
	if(day==null || day=="")
	{
	err=err+"Fill Birth-Day..\n";
	}
	if(month==null || month=="")
	{
	err=err+"Fill Birth-Month..\n";
	}
	if(yr==null || yr=="")
	{
	err=err+"Fill Birth-Year..\n";
	}
	if(prof==null || prof=="")
	{
	err=err+"Fill Profession..\n";
	}
	if(houseno==null || houseno=="")
	{
	err=err+"Fill House Number..\n";
	}
	if(socname==null || socname=="")
	{
	err=err+"Fill Soc Name..\n";
	}
	if(area==null || area=="")
	{
	err=err+"Fill Area of Residance..\n";
	}
	
	if(!(/^\d{6}$/.test(document.frmnewuser.txtzip.value)))
	{
	err=err+"Enter valid Zip code..\n";
	}
	if(!(/^\d{10}$/.test(document.frmnewuser.txtphone.value)))
	{
	err=err+"Enter valid Phone Number..\n";
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
	<table width=900 align=center cellpadding=0 cellspacing=0 border=0>
		<tr><td>
			<div><?php
				include"header1.php";
				?>
			</div>
		</td></tr>
        
<tr align="center">
<td width=600>
 <form name="frmnewuser" method="post" action="chknewuser.php" onSubmit="return validateform()">
	<table align="center" width="600" border="0" cellspacing="0" cellpadding="5">
    
    <tr align="center"><td colspan="2">
    	<br>
        <h3>Register Yourself</h3>
    </td></tr>
    
    <tr><td colspan="2">&nbsp;
    
    </td></tr>
    <tr>
      <td width=40%>Name:</td>
      <td width=60%><label>
        <input type="text" name="txtfname" id="txtfname" placeholder="First Name" >
        <input type="text" name="txtlname" id="txtlname" placeholder="Last Name" >
      </label></td>
    </tr>
    <tr>
      <td>E-Mail:</td>
      <td><label>
        <input type="text" name="txtemail" id="txtemail" placeholder="emailadd@mail.com" >
      </label></td>
    </tr>
    <tr>
      <td>Date Of Birth:</td>
      <td><label>
        <input name="txtday" type="text" id="txtday" placeholder="Day_00" >
      </label>
        <label>
        <input name="txtmonth" type="text" id="txtmonth" placeholder="Month_00" >
        <input name="txtyr" type="text" id="txtyr" placeholder="Year_0000" >
        </label></td>
    </tr>
    <tr>
      <td>Profession:</td>
      <td><label>
        <input type="text" name="txtprof" id="txtprof" >
      </label></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><label>
        <input name="txthouseno" type="text" id="txthouseno" size="8" placeholder="House No." >
        <input type="text" name="txtsocname" id="txtsocname" placeholder="Soc. Name" >
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="txtarea" type="text" id="txtarea" placeholder="Area of Residence">
      </label></td>
    </tr>
    <tr>
      <td>City:</td>
      <td><label>
        <select name="selcity" id="selcity">
          <option selected>Surat</option>
          <option>Ahemedabad</option>
          <option>Vadodara</option>
          <option>Rajkot</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>State:</td>
      <td><label>
        <select name="selstate" id="selstate">
          <option selected>Gujarat</option>
          <option>Maharastra</option>
          <option>Delhi</option>
          <option>Madhyapradesh</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Zip code:</td>
      <td><label>
        <input name="txtzip" type="text" id="txtzip" placeholder="xxxxxx" >
      </label></td>
    </tr>
    <tr>
      <td>Phone Number:</td>
      <td><label>
        <input type="text" name="txtphone" id="txtphone" placeholder="xxxxxxxxxx" >
      </label></td>
    </tr>
    
    
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="center">
      <td colspan="2"><label>
        <input type="submit" name="submit" id="button" value="Send Request">
      </label></td>
      </tr>
  </table>
</form></td>
     
   

</td>
</tr>
<tr><td width="300">&nbsp;</td></tr>
    	<tr><td><?php
    	include"footer.php";
    	?>
	</table>
</body>
</html>