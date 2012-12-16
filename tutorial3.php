<?php session_start(); ?>
<?php 
	$_SESSION['explore'] = $_SESSION['explore'] + 1;
?>

<html>
<head>
<link href='css/main.css' type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
<title>3DS Monster</title>  
</head>
<body>

</head>
<body> 
	
	<?php include "header.php"; ?>
    
	<div class="tic_body" align="center">
		<b>Tutorial</b>
		<br><br>
		<div style="height:200px;">
			<img src="images/game/map.jpg" width="300">
		</div>
		
		<br><br><br>
		
			<?php
				if($_SESSION['explore'] > 4){
			?>

			<a href="tutorial4.php">
				<span class="tic_button"> Explore</span>
			</a>
			
			<?php } else { ?>
			
			<a href="tutorial3.php">
				<span class="tic_button"> Explore</span>
			</a>
			
			<?php } ?>
		
		<br><br><br> 
		
		<?=$_SESSION['explore'];?> /5
		
		<br><br>
	</div>
	 
	
	<?php include "footer.php"; ?>
	
</body>
</html>
 