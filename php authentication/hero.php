<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Heroes' Data</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div class="form">
	<form action="index.php" method="POST">
	<input type="text" name="name" placeholder="Enter Hero Name" required="">
	<input type="text" name="real_name" placeholder="Enter Hero's Real Name" required=""><br>
	<textarea name="short_bio" placeholder="Enter heroe's short bio here" required=""> </textarea><br>
	<textarea name="long_bio" placeholder="Enter heroe's long bio here" required=""> </textarea><br>
	<input type="submit" name="submit" value="SEND">	
</form>

</div>

</body>
</html>

<?php

include 'includes/dbh.inc.php';


//INSERT NEW HERO

if (isset($_POST['submit'])) {
	$nickname=$_POST['name'];
	$real=$_POST['real_name'];
	$short=$_POST['short_bio'];
	$long=$_POST['long_bio'];

$insert="INSERT INTO heroes(name, real_name, short_bio, long_bio) VALUES ('$nickname','$real','$short','$long')";
$run=mysqli_query($conn,$insert);

if ($run) {
	echo('DONE!!!!');
	header('location:display.php');
}

else{
	echo("<br>".'NOT???');
}
}

?>


<?php include 'delete.php'; 
?>
<div class= hero>
<a href="home.php">GO BACK</a>
	</div>

