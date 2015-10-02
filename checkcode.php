<?php 



	if (!$_GET['code']) {

		$error="<br />Please enter your name";
		$result='<div class="alert alert-danger"><strong>Incorrect code.  Please try again!</strong>'.$error.'</div>';
	} else   { 
		if ($_POST['code'] == "clown") {
			
			$result='<div class="alert alert-success"><strong>Yeah! I enter the correct code</strong>'.$error.'</div>';
			
			

		}
		else {
			$error=$_GET'code'];
			$result='<div class="alert alert-danger"><strong>Incorrect code.  Please try again!</strong>'.$error.'</div>';
		}
	}


?>