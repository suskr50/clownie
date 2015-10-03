
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Helpie</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!--- My sytle sheet ---->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
  </head>
  
   <style>
   
   html,body {
   height:100%;
   }
   
  .container {
  
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

    #clownpic  {
      width:100%;
    }

    #firstquest {
  display:none;
}

  
  </style>
  
  <body>
   
 
	
	
	<!---------- Header ---------->

    <?php include 'clownie_header.php';?>

<!---------- Main Section ---------->
	    

<div class="container midcont " >

  <div class="row center">

    <div class="col-md-7">
      <div class="playerBorder" >
      <img  id="clownpic" src="images/irvinD2.jpg">
    </div>
    </div>

    <div class="col-md-5">

      <h3> If you just gave your life to Jesus and asked Him to forgive you of your sins, then <strong>He did.</strong>
      </h3>


      <h3> Jesus, God’s only son, heard you say the prayer out loud and He
        forgave you of your sins. The bad things you have done are washed away.</h3>

        <div class="alert alert-danger" id="eanswer">Fail</div>

      </div>







    <form class="form-inline">
      <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">Clown Name</label>
        <div class="input-group">
          <div class="input-group-addon">Clown Name</div>
          <input type="text" class="form-control" id="clownName" placeholder="Pick a fun clown name">
        </div>
      </div>
      <button id = "lastVideo" type="button" class="btn btn-success btn-lg">Next</button>

    </form>


    </div>
  </div>
 

<?php include 'footer.php';?>

  <!-------- Sponsor Box --------------------------------------------->  



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
 
 <! --------- Pull the weather information --------> 
  <script>
  
  
  var liz = "TRUE"
  $("#lastVideo").click( function(event) {
  	event.preventDefault();
  	
  	if($("#clownName").val() != "") {

   
    $.post("setclownname.php?thecode="+$("#clownName").val(),function(data) {
  

        if(data == 1) {
  
         window.location.href = "clownie3.php";
       } else {
       
         $("#eanswer").html("Incorrect code!").fadeIn();
       };
    });
	
	} else {
		$("#eanswer").html("Please enter your clown name.").fadeIn();
		
	};
  
  
  });


  $("#clownName").keydown( function(event) {


    if(event.which == 13) {
      event.preventDefault();
      
      if($("#clownName").val() != "") {
alert(2);
        
        window.location.href = "clownie3.php";
        


      } else {
        $("#eanswer").html("Please enterss your clown name.").fadeIn();

      };
      

    }
  });



  
  </script>
  
  
  
  
  </body>
</html>



 

