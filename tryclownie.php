






<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Clownie</title>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css" type="text/css">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <script src="js/jquery-ui-1.8.11.custom.min.js" type="text/javascript"></script>

  
        <script type="text/javascript">
        $(function() {
        	$(".numeric_only").keydown(function(event) {    
        		if (event.keyCode == 16){
        			alert('numbers only');
        		}else if ( (event.keyCode == 46) || 
        			(event.keyCode == 8) || 
        			(event.keyCode == 37)  || 
        			(event.keyCode == 39)  || 
        			(event.keyCode == 35)  || 
        			(event.keyCode == 36)  || 
        			(event.keyCode == 9)  || 
        			(event.keyCode == 27 )) {                
			// delete, backspace, left, right, end, home, tab, esc
			// let it happen, don't do anything         
		}else if(event.keyCode >= 48 && event.keyCode <= 57 ) {
			// number keys at top of the keyboard                 
			// let it happen, don't do anything         
		}else if(event.keyCode >= 96 && event.keyCode <= 105 ) {                 
			// number keys on number key pad                 
			// let it happen, don't do anything         
		}else {                 
			event.preventDefault();                  
		}     
	});
        	$("#popup_message").dialog({
        		autoOpen: false,
        		modal: true,
        		width:200,
        		height:200,
        		buttons: {
        			Ok: function() {
        				$( this ).dialog( "close" );
        			}
        		}
        	});
        });

function gotVideo1(){
	$('#code_entry').hide();
	$('#video1').show();
}
function goClownName(){
	$('#video1').hide();
	$('#clown_name_div').show();
}
function goVideo2(){
	$('#clown_name_div').hide();
	$('#video2').show();
}
function goSendAddress(){
	if($.trim($('#street').val())==''){
		$('#required_fields').show();
		return;
	}
	if($.trim($('#city').val())==''){
		$('#required_fields').show();
		return;
	}
	if($.trim($('#state').val())==''){
			//$('#required_fields').show();
			//return;
		}
		if($.trim($('#zip').val())==''){
			//$('#required_fields').show();
			//return;
		}
		if($.trim($('#phone').val())==''){
			$('#required_fields').show();
			return;
		}
		

		post_data = "&resp_code=" + $('#code').val() +
		"&resp_finish_video=" + $('#finish_video').val() + 
		"&resp_say_prayer=" + $('#say_prayer').val() + 
		"&resp_clown_name=" + $('#clown_name').val() + 
		"&resp_parent_email=" + $('#parent_email').val() + 
		"&resp_child_email=" + $('#child_email').val() + 
		"&resp_street=" + $('#street').val() + 
		"&resp_city=" + $('#city').val() + 
		"&resp_state=" + $('#state').val() + 
		"&resp_country=" + $('#country').val() + 
		"&resp_zip=" + $('#zip').val() + 
		"&resp_phone="    + $('#phone').val() ;
		$.ajax({
			type: "POST",
			url: "video_responsePro.php",
			async:true,
			data: post_data,
			success: function(msg){
				if(msg!='success'){
					showMessage(msg);
				}
				$('#thank_you').html('<div style="padding:30px;">I got it!  Thank You</div>');

				return true;
			},
			error: function(msg){ 
				str='';
				for(prop in msg)
				{
					str+=prop + " value :" + msg[prop]+"<br>";//Concate prop and its value from object
				}
				showMessage(str);
				return false;
			}
		})



		$('#more_questions').hide();
		$('#video2').show();
	}
	function showMessage(msg){
		$("#popup_message").html(msg);
		$("#popup_message").dialog("open");
	}
	</script>





	<style>


	-->
	</style>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
		<div class="container topnav">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand topnav" href="#">ROSS Family Ministries</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#about">Home of RFM</a>
					</li>
					<li>
						<a href="#services">About Us</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>


	<div class="container the_header2">
		<div class="row ">
			<div class="col-xs-6 ">
				
			</div>

			<div class="col-xs-6 col-xs-offset-6 intro-message2">

				<h1>Hi! <br/> I am Irvin D Clown.</h1>
				<h3> I am glad you heard about my show. 
					Just enter the code you received at our event and enjoy the show.</h3>
					
					<hr class="intro-divider">

 					<div class="alert alert-success" id="answer">Success</div>
  <div class="alert alert-danger" id="eanswer">Fail</div>

 					<form   >

 						<div class="form-group">
 							<span class="input-group-addon" id="basic-addon1">Code</span>
 							<input name="code" id="code" type="text" class="form-control" >
 						</div>

 						<button id="findcode" class="btn btn-success btn-lg">Enter</button>
 						

 					</form>

				</div>

			</div>

		</div>
	</div>

<body>




 
 
 <! --------- Pull the weather information --------> 
  <script>
  
  
  
  $("#findcode").click( function(event) {
  	event.preventDefault();
  	
  	if($("#code").val() != "") {
  
  		$.post("scrapper.php?city="Chicago",function(data) {
  			$("#eanswer").hide();
			$("#answer").html(data).fadeIn();
		});
	
	} else {
		$("#eanswer").html("Please enter a city.").fadeIn();
		
	};
  
  
  });
  
  </script>


        <!-- InstanceEnd -->

        </html>
