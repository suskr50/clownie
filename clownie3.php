


<?php 


session_start();


if ($_POST["submit"]) {

    $result="Her i am";



    if (!$_POST['pemail']) {

        $error="<br />Please enter your name";
        $result='<div class="alert alert-danger"><strong>Incorrect code.  Please try again!</strong>'.$error.'</div>';
    } else   { 
        if ($_POST['code'] == "clown") {
            $result='<div class="alert alert-success"><strong>YEAH! correct code.
            you!</strong> I\'ll be in touch.</div>';
            $displayvideo='TRUE';
        }
        else {
            $error=$_POST['code'];
            $result='<div class="alert alert-danger"><strong>Incorrect code.  Please try again!</strong>'.$error.'</div>';
        }
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



<style >
#firstquest {
    display:none;
}

#eanswer{
    margin-top:50px;
    display:none;

}

#topmsg2 {
    display:none;
}

#player {
    width:100%;
}

</style>
</head>

<body>




    <!---------- Header ---------->

    <?php include 'clownie_header.php';?>

    <!---------- Main Section ---------->

    <div class="container midcont">
        <div class="row"> 
            <div class="col-md-6"> 
                <h1 class="highlight"> Hi <?php echo $_SESSION["clownName"]?> !</h1>

                <h2 class="topmsg1 center"> One last video just for you! </h2> 
                <div id="player" class="playerBorder"></div> <!------------- Video ------------>
            </div>



            <div class="col-md-6" id="firstquest">

                <h3 class="topmsg2"> To receive our Kids Newsletter and other exciting things from Irvin, 
                    please fill out the address form. </h3>
                    <br>

                    <?php echo $result ?>

                    <div class="alert alert-danger" id="eanswer"></div>



                    <form class="form-horizontal" role="form" name="form1" action="#" method="post" onsubmit="return false">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Your Email</label>
                                <div class="col-sm-10">
                                    <input id="kemail" type="text" placeholder="Your Email" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Parent's Email</label>
                                <div class="col-sm-10">
                                    <input id="pemail" type="text" placeholder="Parents Email" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Address Line 1" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput"></label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Address Line 2" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">City</label>
                                <div class="col-sm-10">
                                    <input id="city" type="text" placeholder="City" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">State</label>
                                <div class="col-sm-4">
                                    <input id="state" type="text" placeholder="State" class="form-control">
                                </div>

                                <label class="col-sm-2 control-label" for="textinput">ZipCode</label>
                                <div class="col-sm-4">
                                    <input type="text" placeholder="Post Code" class="form-control">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Country" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                        <button type="submit" id="tomail" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!------------- Footer ------------>

    <!-- Footer -->

    <?php include 'footer.php';?>

    <?php
// remove all session variables
    session_unset();

// destroy the session
    session_destroy();
    ?>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>




<script language="javascript">
function mail() {
    alert("Sending a mail eventually");
    document.location = 'mailto:' + 'susanschrum' + '@' + 'gmail' + '.com'
}
</script>




<script src="http://www.youtube.com/player_api"></script>

<script>



        // create youtube player
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: 'GANFgstTikc',
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
            if (event.data === 0) {
             document.getElementById("firstquest").style.display = 'block';
             $("#player").attr("width","50%");

         }
     }


     $("#tomail").click( function(event) {

        $error = "";
        $("#email").css('border-color', 'grey');
        $("#kmail").css('border-color', 'grey');
        $("#state").css('border-color', 'grey');
        $("#city").css('border-color', 'grey');

        if($("#pemail").val() == "") {
            $error = $error + "Please enter Parent's Email";
            $("#pemail").css('border-color', 'red');
        } 


        if($("#kemail").val() == "") {
            $error = $error + " <br> Please enter Your Email ";
            $("#kemail").css('border-color', 'red');
        } 

        if($("#city").val() == "") {
            $error = $error + "<br>Please enter city ";
            $("#city").css('border-color', 'red');
        } 

        if($("#state").val() == "") {
            $error = $error + "<br>Please enter state";
            $("#state").css('border-color', 'red');

        } 


        if ($error != "") {
            $("#eanswer").html($error).fadeIn();
        } else {

           window.location.href = "thankyou.php";
       }


   });


</script>

<!-- InstanceEnd --></html>
