<?php 

include 'includes/dbh.inc.php';

if(isset($_GET['deleteid'])){

	$id=$_GET['deleteid'];
	$delete="DELETE FROM heroes WHERE ID='$id'";
	$remove=mysqli_query($connect, $delete);
	if ($remove) {
		header('location:display.php');
	}

	else{
		echo("Not deleted");
	}

}
?>	