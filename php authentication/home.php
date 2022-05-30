<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div class="main-page" id="welcome">
	<h1>WELCOME TO THE X-MEN DATABASE</h1>
			<?php 
                if(isset($_SESSION['username'])){
                    echo '<form action="includes/logout.inc.php" method= "post">
                    <button class=logout type= "submit" name= "logout-submit">Logout</button>  
                	</form>';
					echo '<form action="hero.php" method= "post">
					<a href ="hero.php"><p class=add_admin>Insert New Hero</p></a>  
					</form>';
					echo '<form action="display.php" method= "post">
					<a href ="display.php"><p class=add_admin>Display Heroes</p></a>  
					</form>';
					echo '<form action="update.php" method= "post">
					<a href ="update.php"><p class=add_admin>Update Heroes</p></a>  
					</form>';
				}
			?>		
	</div>
</body>
</html>