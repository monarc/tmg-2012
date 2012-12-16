<html>
<head>
<link href='css/main.css' type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
<title>3DS Monster</title>  
 
<script>
	function doPopup() 
	{
		window.open( "monster.php", "myWindow", "status = 0, height = 300, width = 300, resizable = 0" )

	}
        
</script>

 
 
</head>

<body>

</head>
<body> 
	
	<?php include "header.php"; ?>
        
	<div class="tic_body" align="center">
		<b>Choose your Monsters</b>
                
                <form action="battle2.php" method="post"> 
		<br><br>
		<table>
			<tr>
				<td width="60">
					<div style="width:50px; height:50px; border:2px #000 solid;"></div>
                                </td>
				<td width="60"><div id="dLinks" style="width:50px; height:50px; border:2px #000 solid;" onclick="doPopup(this);"></div></td>
				<td width="60"><div style="width:50px; height:50px; border:2px #000 solid;"></div></td>
				<td width="60"><div style="width:50px; height:50px; border:2px #000 solid;"></div></td>
			</tr>
		</table>
                
		<br>
 
                <br>
                
		
		<a href="battle2.php">
			<input type="submit" id="battle1" name="battle1" class="tic_button" value=" >> ">
		</a>
                </form>
		<br><br>
	</div>
	 
	<?php include "footer.php"; ?>
	
</body>
</html>

</body>
</html>