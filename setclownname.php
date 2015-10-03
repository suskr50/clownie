<?php 
// Start the session
session_start();
$acode=$_GET["thecode"];
$_SESSION["clownName"]=$acode;
$_SESSION["jesus"]="YES";
$matches=1;
echo $matches;
?>





