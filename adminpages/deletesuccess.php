


<?php 
	
	session_start();
	$search = $_SESSION["search"];

	
	
	$con = mysqli_connect("localhost","root","","fourvee");
	$sql = "DELETE FROM frontend where user_id = $search";

	mysqli_query($con, $sql);
	mysqli_errno($con);

	include('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
	<style>
 		#update {font-size: 3em; margin: 200px;}
	</style>
</head>
<body>
	<center>
	<div id="update">Account Deleted !"</div>
	<?php echo $search; ?>
	
	</center>
</body>
</html>

