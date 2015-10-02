<?php 

$acode=$_GET["thecode"];



$matches = str_replace(" ", "",$acode);

if ($acode == "clown") {
			
			$matches=1;
			

		}
		else {
			$matches=0;
			
		}



echo $matches;



?>



