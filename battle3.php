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

    #animate		{
        width:160px;
        height:400px;
        position:absolute;
        top:150px;
        left:10px;
        background-image: url(images/game/Game_01.gif); 
        background-repeat: no-repeat;
    }
    #animate2		{
        width:160px;
        height:400px;
        position:absolute;
        top:150px;
        left:200px;
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

</style>
<title>3DS Monster</title>  
        <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="js/jquery.timers-1.1.2.js" ></script>
        <script type="text/javascript">
            $(document).ready(function(){				 
                $("#animate2").animate({left:"150px"}, 1500);
                $("#animate").animate({left:"100px"}, 1500, function(){
                    //appear POW
                });
            });
        </script>
</head>
<body> 
	
	<?php include "header.php"; ?>
        
	<div class="tic_body" align="center">
		<b>FIGHTING!!!</b>
                 <div id="animate"></div>
                <div id="animate2"></div>
                <form action="battle4.php" method="post"> 
		<br><br>
                    <input type="hidden" name="monster_1" id="monster_1" value="<?=$_POST['monster_1'];?>">
                   <input type="image" src="images/game/ka-pow.gif" width="200">  
		 
                </form>
		<br><br>
	</div>
	 
	<?php include "footer.php"; ?>
	
</body>
</html>
 