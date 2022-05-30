<?php

include 'includes/dbh.inc.php'; 


if(isset($_GET['updateid'])) {
	$id=$_GET['updateid'];
	$result="SELECT * FROM heroes WHERE ID=$id";
	$run=mysqli_query($conn,$result);

	if(mysqli_num_rows($run)==1) {
	  while($rows= mysqli_fetch_assoc($run)){	
	    $nickname= $rows['name'];
	    $real= $rows['real_name'];
	    $short= $rows['short_bio'];
		$long= $rows['long_bio'];
	}
}

	if (isset($_POST['update'])) {
		$id=$_POST['ID'];
		$nickname=$_POST['name'];
		$real=$_POST['real_name'];
		$short=$_POST['short_bio'];
		$long= $_POST['long_bio'];

		$set=" UPDATE heroes SET name='$nickname',real_name='$real',short_bio='$short', 'long_bio'=$long WHERE ID=$id";
		$query=mysqli_query($conn,$set);
		if ($query) {
		    header('location:display.php');
		}
	}
}

?>
