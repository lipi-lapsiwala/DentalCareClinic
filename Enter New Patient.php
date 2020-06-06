<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
 <link href="themes/css1.css" rel="stylesheet" type="text/css" />
 <script src="themes/jscript1.js" type="text/javascript"></script>
 <link href="themes/generic.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table align="center" width="900" border="0" cellspacing="0" cellpadding="0">
<tr><td colspan="2">
	<?php
    include"header.php";
	?>
</td></tr>

<tr><td colspan="2">
	<div class="div1"> <p><a href="adminhome.php">Admin Home</a><a href="addnewp.php">Add New Patient</a><a href="addnewapp.php">Add New Appointment</a><a href="patientlist.php">Existing Patients List</a><a href="newapplist.php">Appointment Requests</a><a href="viewprofile.php">View Your Profile</a><a href="logout.php">Log Out</a></p>
</div>
</td></tr>

<tr><td width=600><form name="frmprofile" method="post" action="chkprofile.php" >
  <table width="600" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td colspan="2"><h3><u>Edit Your Profile</u></h3></td>
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
      <td>Gender:</td>
      <td><label>
        <input name="radgender" type="radio" id="radio" value="Male" checked>
      Male 
      <input type="radio" name="radgender" id="radio2" value="Female">
      Female</label></td>
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
</td><td width="300">&nbsp;


</td></tr>



<tr><td colspan="2">
	<?php
    include"footer.php";
    ?>
</td></tr>

</table>

</body>
</html>