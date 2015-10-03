<?php

// Start the session
session_start();


if ($_POST['submit']=="Submit") {
	$link = "http://176.32.230.7/heartfalcons.com/RFM/clownie1.php";
	$thecode = $_POST["code"];
	$error = "";
	if ($thecode == "clown") {
		header('Location: '.$link);
	} else {
		$error="Incorrect code!<br/> Please input correct code!";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Clownie</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<style>
   
   html,body {
   height:100%;
   }
  
  #code, {
    width:80px;
    height:20px;
  }

  #codelable {
    background-color:grey;
    padding: 2px 2px 2px 2px;
    height:20px;
  }
  
 
  .hcenter {
    margin-top:20%;
  }
 
</style>

<body>

  <?php
// Set session variables

$_SESSION["clownName"] = "";
$_SESSION["jesus"]="NO";

?>


<div class="container clownContainer midContainer" >

  <div class="row center hcenter">
    <div class="col-sm-7"></div>  <!-----Keep ---------->


    <div class="col-sm-5 ">

      <h1 > Hi! <br/> I am Irvin D Clown. </h1>

      <h3> I am glad you heard about my show. 
        Just enter the code you received at our event and enjoy the show. 
      </h3>


        <?php if ($error) { ?>

         <div class="alert alert-danger" ><?php echo $error ?></div>
        
       <?php }  ?>

        <form method="post" >
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">Code</div>
              <input type="text" class="form-control" name="code" >
            </div>
          </div>

          <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit">
        </form>
      </div>

    </div>
  </div>


  <!---------- Footer ---------->

        <?php include 'footer.php';?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 

        
</html>