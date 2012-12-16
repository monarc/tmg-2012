<html>
<head>
<link href='css/main.css' type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
<title>3DS Monster</title>  

</head>
<body> 
	
	<?php include "header.php"; ?>
        
	<div class="tic_body" align="center">
		<b>Enemy</b>
                
                <form action="battle3.php" method="post"> 
                    <input type="hidden" name="monster_1" id="monster_1" value="<?php echo $_POST['monster_1']; ?>">
		<br><br>
                <table>
                    <tr>
                        <td><img src="images/game/enemy/enemy1.jpg" width="100"></td>
                        <td width="10">&nbsp;</td>
                        <td valign="top" style="line-height: 2em;">Name : Red Monster <br>
                            Attack : 10<br>
                            Defense : 5
                        
                        </td>
                    </tr>
                    
                </table>    
                
		<br>
 
                <br>
                
                <table>
                    <tr>
                        <td>
		
			<input type="submit" id="battle2" name="battle2" class="tic_button" value=" Battle ">
                        </td>
                        <td> 
                        <a href="battle1.php">
                        <button type="button" class="tic_button">Retreat</button>
                        </a>

                        </td>

                        </tr>
                </table>
                </form>
		<br><br>
	</div>
	 
	<?php include "footer.php"; ?>
	
</body>
</html>
 