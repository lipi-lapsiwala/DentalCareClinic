<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
<script language="javascript">
function validateform()
{
var err;
err="";

drfname=document.forms["frmprofile"]["txtdrfname"].value;
drlname=document.forms["frmprofile"]["txtdrlname"].value;
cname=document.forms["frmprofile"]["txtcname"].value;
shopno=document.forms["frmprofile"]["txtshopno"].value;
complex=document.forms["frmprofile"]["txtcomplex"].value;
area=document.forms["frmprofile"]["txtarea"].value;
zip=document.forms["frmprofile"]["txtzip"].value;
phone=document.forms["frmprofile"]["txtphone"].value;
bechlor=document.forms["frmprofile"]["txtbechlor"].value;
masters=document.forms["frmprofile"]["txtmasters"].value;

expcomp=document.forms["frmprofile"]["txtexpcomp"].value;

var y;
y=/^[0-9]+$/;
if(drfname==null || drfname=="")
{
err=err+"Fill First Name..\n";
}
if(drlname==null || drlname=="")
{
err=err+"Fill Last Name..\n";
}
if(cname==null || cname=="")
{
err=err+"Fill Clinic's Name..\n";
}
if(shopno==null || shopno=="")
{
err=err+"Fill Shop Number..\n";
}
if(complex==null || complex=="")
{
err=err+"Fill Complex Name..\n";
}
if(area==null || area=="")
{
err=err+"Fill Area Name..\n";
}
if(zip.length!=6 || !zip.match(y))
{
err=err+"Enter Valid Zip Number..\n";
}
if(phone.length!=10 || !phone.match(y))
{
err=err+"Enter Valid Phone Number..\n";
}
if(bechlor==null || bechlor=="")
{
err=err+"Fill Bechlor Field..\n";
}
if(masters==null || masters=="")
{
err=err+"Fill Masters Field..\n";
}
if(expcomp==null || expcomp=="")
{
err=err+"Fill Company Name For Experience..\n";
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
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
<tr><td colspan="2">
	<?php
    include"header2.php";
	?>
</td></tr>

</table>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
<tr align="center"><td colspan=2>

<form name="frmprofile" method="post" action="chkprofile.php" onSubmit="return validateform()">
  <table width="600" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
      <td colspan="2"><br><h3 align="center">Edit Your Profile</h3></td>
      </tr>
    <tr>
      <td width=30%>&nbsp;</td>
      <td width=70%>&nbsp;</td>
    </tr>
    <tr>
      <td>Your Name:</td>
      <td>Dr. 
        <label>
        <input type="text" name="txtdrfname" id="txtdrfname" placeholder="First Name">
        <input type="text" name="txtdrlname" id="txtdrlname" placeholder="Last Name">
        </label></td>
    </tr>
    
    <tr>
      <td>Clinic's Name:</td>
      <td><label>
        <input name="txtcname" type="text" id="txtcname" size="28">
      </label></td>
    </tr>
    <tr>
      <td>Shop Number and Name:</td>
      <td><label>
        <input name="txtshopno" type="text" id="txtshopno" size="28" placeholder="Shop Number">
        <input type="text" name="txtcomplex" id="txtcomplex" placeholder="Complex Name">
        </label></td>
    </tr>
    <tr>
      <td>Area Name:</td>
      <td><label>
        <input name="txtarea" type="text" id="txtarea" size="28">
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
        <input name="txtzip" type="text" id="txtzip" size="28">
      </label></td>
    </tr>
    <tr>
      <td>Phone Number:</td>
      <td><label>
        <input name="txtphone" type="text" id="txtphone" size="28">
      </label></td>
    </tr>
    
    <tr>
      <td>Degrees:</td>
      <td><label>
        <input type="text" name="txtbechlor" id="textfield" placeholder="Bechlors">
        <input type="text" name="txtmasters" id="textfield2" placeholder="Masters">
      </label></td>
    </tr>
    <tr>
      <td>Experiences:</td>
      <td><label>
        <select name="selexpyr" id="selexpyr" >
          <option selected>1 year</option>
          <option>2 years</option>
          <option>3 years</option>
          <option>4 years</option>
          <option>5 years</option>
          <option>6 years</option>
                        </select>
        <input name="txtexpcomp" type="text" id="txtexpcomp" size="34" placeholder="Company Name">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td colspan="2"><label>
        <input type="submit" name="submit" id="button" value="Update Profile">
      </label></td>
      </tr>
  </table>
	    </form>
</td>



<tr><td colspan="2">
	<?php
    include"footer.php";
    ?>
</td></tr>

</table>

</body>
</html>