<html>
    <head>
        <link href='css/main.css' type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
        <title>3DS Monster</title>  
        <style type="text/css">
            body 			{ 	
                background-image: url(images/game/Game_01.gif); 
                background-repeat: no-repeat;
            }
            a 				{ 	
                text-decoration:none; 
                color: #333333; 
                font-weight:bold;
            }

            #view_result{
                display:none;
            }

            #animate		{
                width:160px;
                height:400px;
                position:absolute;
                top:150px;
                left:10px;
                margin-left: 0px;
                background-image: url(images/game/Game_01.gif); 
                background-repeat: no-repeat;
            }
            #animate2		{
                width:160px;
                height:400px;
                position:absolute;
                top:150px;
                left:200px;
                margin-left: 0px;
                background-image: url(images/game/Game_02.gif); 
                background-repeat: no-repeat;
            }

            #detail 		{	
                font-family:Tahoma; 
                color: #333333; 
                font-size: 0.7em; 
                background-color:#CCC; 
                width: 500px; 
                height: 300px; 
                position:absolute;
                top:150px;
                left:600px; 
                border:1px solid #333;
                -moz-border-radius: 20px; 
                -moz-border-radius: 20px; 
                -webkit-border-radius : 20px; 
                -webkit-border-radius: 20px;
                -moz-box-shadow:1px 1px 12px #000; 
                -webkit-box-shadow:1px 1px 12px #000; 
                box-shadow:1px 1px 12px #000; 
                opacity: 0.7; 
                -moz-opacity: 0.7; 
                filter:progid:DXImageTransform.Microsoft.Alpha(opacity=70);
                padding: 25px;
            }

            #detail h1 		{
                font-size: 2.5em; 
                color: white; 
                font-family:Verdana, Arial, Helvetica, sans-serif; 
            }				
            .fader1{
                z-index: 10;
                margin-top:30px;
                width:330px;
                text-align: center;
            }
        </style>
        
        <title>3DS Monster</title>  
        <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="js/jquery.timers-1.1.2.js" ></script>
        <script type="text/javascript">
            $(document).ready(function(){	
                $('.fader1').hide();
                $("#animate2").animate({left:"175px"}, 800);
                $("#animate").animate({left:"75px"}, 800, function(){
                    $(this).hide();
                    $('#animate2').hide();
                    $('.fader1, #view_result').fadeIn(500);
                });

            });
        </script>
    </head>
    <body> 

        <?php include "header.php"; ?>

        <div class="tic_body" style="min-height:300px; width:330px; text-align:center;">
            <b>FIGHTING!!!</b>
            <div id="animate"></div>
            <div id="animate2"></div>
            <div class="fader1"><img src="images/game/ka-pow.gif"></div> 
           
            <form action="battle4.php" method="post"> 
                <br><br>
                <input type="hidden" name="monster_1" id="monster_1" value="<?php echo $_POST['monster_1']; ?>">


                <p style="margin-top:20px" id="view_result">
                    <input type="submit" value="View Result" style="padding:10px;background:#A9A9A9;border-radius:5px;">
                </p>

            </form>
            <br><br>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>
