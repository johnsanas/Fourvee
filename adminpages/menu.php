<?php 

	include('adminsetup.php');

	session_start();

	$admin_id = $_SESSION["admin_id"];

	$query = "SELECT * FROM admin where admin_id = $admin_id ";

	$result = mysqli_query($con,$query);
	$admin = mysqli_fetch_assoc($result);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fourvee | Admin</title>

	<link rel="stylesheet" type="text/css" href="admin.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css"></link>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>


	</style>
</head>

<body>

	<nav role='navigation'>
		<div id="leftHeader">
		<a href="#"><div id="logo"></div></a>
	</div>
	
	  <ul>
	    <li><a href="#">Manage Front-End</a>
	      <ul>
	        <li><a href="viewaccount.php">View Account</a></li>
	        <li><a href="create.php">Create</a></li>
	        <li><a href="edit.php">Edit</a></li>
	        <li><a href="delete.php">Delete</a></li>
	   
	      </ul>
	     </li>
	    <li><a href="#">Back-End</a>
	      <ul>
	        <li><a href="">Home</a></li>
	        <li><a href="">News</a></li>
	        <li><a href="">Review</a></li>
	        <li><a href="">Gallery</a></li>
	        <li><a href="">Entertainment</a></li>
	      </ul>
	    </li>
	    <li><a href="#"><?php echo"Howdy," . $admin['firstname']; ?></a>
			<ul>
		        <li><a href="profile.php">Profle</a></li>
		        <li><a href="logout.php">Logout</a></li>
		      
		  </ul>
	  	</li>
	</nav>  




</body>
</html>