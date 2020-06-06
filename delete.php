<?php

include "connect.php";
$i=$_GET['i'];

$q="delete from patient where id='$i'";
$r=mysql_query($q) or die("delete error");
$l=$_SERVER['HTTP_REFERER'];
header("Location:$l");

?>
