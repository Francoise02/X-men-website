<link rel="stylesheet" type="text/css" href="assets/style.css">
<?php 

include 'includes/dbh.inc.php';

$select="SELECT * FROM heroes";
$display=mysqli_query($conn, $select);

if(mysqli_num_rows($display) > 0 ) {
	?>

	<table border="1" cellpadding="0">
	<tr>
		<th>ID</th>
		<th>Hero Name</th>
		<th>Real Name</th>
		<th>Short Biography</th>
		<th>Long Biography</th>
	</tr>

<?php 
	while($rows= mysqli_fetch_assoc($display)){	        
	   ?>

	<tr>
		<td> <?php echo $rows['ID'];?> </td>
		<td> <?php echo $rows['name'];?> </td>
		<td> <?php echo $rows['real_name'];?> </td>
		<td> <?php echo $rows['short_bio'];?> </td>
        <!-- GET DATA ID IN DATABASE  -->
        <td><a href="view.php?viewid=<?php echo $rows['ID'];?>"class="btn">VIEW MORE</a></td>	
	</tr>
<?php  } }?>

</table>

<div class= display>
<a href="index.php"> ADMIN LOGIN</a>
	</div>
