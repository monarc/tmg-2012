<html>
<head>
<link href='css/main.css' type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
<title>3DS Monster</title>  

</head>
<body> 
	
	<?php include "header.php"; ?>
        
    
<?php
    if(isset($_POST['monster_1'])){
        if($_POST['monster_1'] == '5')
            $condition = "WIN";
       else {
            $condition = "LOSE";
        }
    }
     
?>    
    
	<div class="tic_body" align="center">
            <div style="font-size: 26px; font-weight: bold;">YOU <?=$condition;?>!!!</div>
                
                <form action="battle3.php" method="post"> 
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
		<a href="battle1.php">
			<button type="button" class="tic_button">Battle Again</button>
		</a>
                        </td>
                        <td>                
                        <button type="button" class="tic_button">Add Friend</button>
                        </td>
                         <td>                
                        <button type="button" class="tic_button">Message</button>
                        </td>                       

                        </tr>
                </table>
                </form>
		<br><br>
	</div>
	 
	<?php include "footer.php"; ?>
	
</body>
</html>
 