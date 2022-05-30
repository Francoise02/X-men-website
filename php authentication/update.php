<?php 
require_once 'update_process.php';
include 'includes/dbh.inc.php'; 

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Heroes' Data</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div class="form">
	<form action="hero.php" method="POST">
	<input type="text" name="name" value="<?php echo $nickname; ?>" placeholder="Enter Hero Name" required="">
	<input type="text" name="real_name" value="<?php echo $real; ?>" placeholder="Enter Hero's Real Name" required=""><br>
	<input class="update-hero" type="text" name="short_bio" value="<?php echo $short; ?>" placeholder="Enter heroe's short bio here" required=""><br>
	<input class="update-hero" type="text" name="long_bio" value="<?php echo $long; ?>" placeholder="Enter heroe's long bio here" required=""><br>
	<input type="submit" name="update" value="UPDATE">	

</form>

</div>

<div class= display>
<a href="home.php">GO BACK</a>
	</div>

</body>
</html>
