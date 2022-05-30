<link rel="stylesheet" type="text/css" href="assets/style.css">


	
<div class="view-more">
<?php 
include 'includes/dbh.inc.php';

if(isset($_GET['viewid'])){
	$id=$_GET['viewid'];
	$select="SELECT name,long_bio FROM heroes WHERE ID='$id'";
	$display=mysqli_query($conn, $select);

	if(mysqli_num_rows($display) > 0 ) {

		while($rows= mysqli_fetch_assoc($display)){	        
		 echo "<h1>{$rows['name']}</h1>";
		 echo "<p>{$rows['long_bio']}</p>";
	          
	} } }

?>

  <a href="home.php">GO BACK</a>

</div>
