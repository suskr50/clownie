<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Falcons Contact Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    
    
  </head>
  
   <style>
   
   html,body {
   height:100%;
   }
   
  .container {
  background-image:url("weather.jpg");
  width:100%;
  height:100%;
  background-size:cover;
  background-position:center;
  }
  
  .center {
  	text-align:center;
  }
  
  #topm {
  	padding-top:300px;
  }
  
  #answer{
  	margin-top:50px;
  	display:none;
  
  	}
  	
#eanswer{
  	margin-top:50px;
  	display:none;
  
  	}
  
  #zipp {
  	margin-top:50px;
  	
  	}
  
  </style>
  
  <body>
   
 
	
	<!-------------------------------- background ---------------->
	
	    
   
   <div class="container" >
   <div class="row center">
   
   <div class="col-md-3">
  
   </div>
   
   <div class="col-md-6">
  
 <h1>Hi! <br/> I am Irvin D Clown.</h1>
        <h3> I am glad you heard about my show. 
          Just enter the code you received at our event and enjoy the show.</h3>

	<form>
		<div class="form-group" id="zipp">
  		<input type="text" class="form-control" placeholder="city" id="city" >
  
 
		</div>
<button id = "findweather" type="button" class="btn btn-success btn-lg">Find my weather</button>
</form>

	 
  <div class="alert alert-success" id="answer">Success</div>
  <div class="alert alert-danger" id="eanswer">Fail</div>
   
   </div>
  
   </div>
    </div>
    
  <!-------- Sponsor Box --------------------------------------------->  



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
 
 <! --------- Pull the weather information --------> 
  <script>
  
  
  
  $("#findweather").click( function(event) {
  	event.preventDefault();
  	
  	if($("#city").val() != "") {
  
  		$.post("scrapper.php?city="+$("#city").val(),function(data) {
  			$("#eanswer").hide();
			$("#answer").html(data).fadeIn();
		});
	
	} else {
		$("#eanswer").html("Please enter a city.").fadeIn();
		
	};
  
  
  });
  
  </script>
  
  
  
  
  </body>
</html>