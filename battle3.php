<html>
<head>
<link href='css/main.css' type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
<title>3DS Monster</title>  

</head>
<body> 
	
	<?php include "header.php"; ?>
        
	<div class="tic_body" align="center">
		<b>FIGHTING!!!</b>
                
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
 