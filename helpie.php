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

<link rel="stylesheet" type="text/css" href="new_style.css">
    
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

    <!---------- Header w/nav bar ---------->
   	
    <?php include 'clownie_header.php';?>  

    <!---------- Header ---------->  
   
    <div class="container clownContainer midContainer" >

     <div class="row center hcenter">
      <div class="col-md-7"></div>  <!-----Keep ---------->


      <div class="col-md-5 ">



       <h1 > Hi! <br/> I am Irvin D Clown. </h1>

       <h3> I am glad you heard about my show. 
        Just enter the code you received at our event and enjoy the show.</h3>
        <br/>

       
        <div class="alert alert-danger" id="eanswer">Fail</div>

        <form class="form-horizontal" role="form">
            <div class="form-group">
            
              <label class="control-label col-sm-2" for="code">Code</label>
              <input type="text"  class="form-control" placeholder="city" id="code" >
            </div>

          
          <button id = "findcode" type="button" class="btn btn-success btn-lg"> Submit Code</button>
        </form>




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
  
  
  var liz = "TRUE"
  $("#findcode").click( function(event) {
  	event.preventDefault();
  	
  	if($("#code").val() != "") {
  
  		$.post("scrapper.php?thecode="+$("#code").val(),function(data) {

        alert(data);

        if(data == 1) {
  			 window.location.href = "clownie1.php";
       } else {
       
         $("#eanswer").html("Incorrect code!").fadeIn();
       };
		});
	
	} else {
		$("#eanswer").html("Please enter a city.").fadeIn();
		
	};
  
  
  });

$("#code").keydown( function(event) {
  

    if(event.which == 13) {
        event.preventDefault();
    
    if($("#code").val() != "") {
  
      $.post("scrapper.php?thecode="+$("#code").val(),function(data) {

        alert(data);

        if(data == 1) {
         window.location.href = "clownie1.php";
       } else {
       
         $("#eanswer").html("Incorrect code!").fadeIn();
       };
    });
  
  } else {
    $("#eanswer").html("Please enter a city.").fadeIn();
    
  };
    }
});

  
  </script>
  
  
  
  
  </body>
</html>