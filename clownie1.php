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



<style >







#firstquest {
	display:none;
}

#firststate{
    display:block;
    color:blue;
}


#questsect{
    background-color:yellow ;
    height:200px;
}



#player {
    width:100%;
}

.midcont{
    padding-top:100px;
    padding-bottom:100px;
}







.middlesection {
    background-image:url("images//Stock-colour-backgrounds-5.jpg");
    background-size:cover;
}

</style>
</head>

<body>

<!---------- Header ---------->

    <?php include 'clownie_header.php';?>

<!---------- Main Section ---------->



<div class="container midcont  "id="textcolor">

    <div class="row ">

        <div class="col-md-7 ">
            <div class="playerBorder">
                <div id="player"></div>
            </div>
        </div>

        <div class="col-md-5 intro-message2">


            <h1> Hello </h1>
            <h3> I have a video for you to watch.  At the end, I will have a question to ask you. <h3>

                <div id="firstquest">
                    <div id="firststate">

                       
                        <div class="alert alert-danger" id="eanswer">Fail</div>

                    </div>

                    <form>
                        <h2>Did  you say  the prayer <br>with Irvin D Clown?</h2>
                        <lable><input type="radio" value="yes" name="say_prayer" id="say_prayer"/>	Yes</label>
                            <label ><input type="radio" value="no" name="say_prayer" id="say_prayer">&nbsp;No</label>
                            <button id="nextvideo" class="btn btn-success btn-lg">Next </button>
                    </form>
                </div>

        </div>

    </div><!---------- end Row ---------->
</div> <!---------- end continer ---------->

       

<!---------- Footer ---------->

        <?php include 'footer.php';?>





</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



    <script src="http://www.youtube.com/player_api"></script>

    <script>
    
  

        // create youtube player
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
              height: '415',
              width: '520',
              videoId: '033LG5y0Xhk',
                playerVars: { 
      'rel': 0, 
      'enablejsapi': 1 
    }, 
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
        }

        // autoplay video
        function onPlayerReady(event) {
            event.target.playVideo();
             
        }

        // when video ends
        function onPlayerStateChange(event) {        
            if(event.data === 0) {          
               document.getElementById("firstquest").style.display = 'block';
             
            }
        }


    $("#nextvideo").click( function(event) {
    event.preventDefault();
    
    if($("input[name=say_prayer]:checked").val() == "yes") {
             window.location.href = "clownie2.php";
       } else {
            if($("input[name=say_prayer]:checked").val() == "no") {
                $("#eanswer").html("Kevin What do you want to happen when kids say no").fadeIn();
                
            }else {

                $("#eanswer").html("Please answer Yes or No").fadeIn();
        
     };
       };

    
      
  });

        

    </script>
    
    
    <script>
    </script>




<!-- InstanceEnd --></html>
