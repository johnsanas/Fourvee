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
		#form-container{ margin:0px auto; background-color: #e9e9e9; width:400px; height: 500px;}
		#form-container #log-in{font-size:1.4em; padding-top: 30px; }
		#form-container form input{font-size: 1em; padding: 5px; margin: 3px; border-radius: 5px; border:1px solid #616466;}
		#form-container #username {margin-top: 40px;}
		#form-container #submit-button{margin-top: 20px;}
		#form-container #prompt-label{border:none;}
		#spacer{margin-top: 100px;}
		#create {font-size: 2.5em; margin: 15px 0px;}
		.date {width: 210px;}
		.textarea{width: 210px; height: 100px;}
		#file{width: 12  0px;}
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

	<div id="spacer"></div>



	<center>
	<p id="create">Create Account</p>
	<div id='form-container'>
	<form method='post' action="createsuccess.php" enctype="multipart/form-data">
		<input id="file" type="file" name="fileToUpload" ><br>
		<input id='username' type='text' name='username' placeholder='Username' required><br>
		<input type='password' name='password' placeholder='Password' required><br>
		<input type='text' name='firstname' placeholder='First Name' required><br>
		<input type='text' name='middlename' placeholder='Middle Name (Optional)'><br>
		<input type='text' name='lastname' placeholder='lastname' required><br>
		<input class='date' type='date' name='bday' placeholder='Birthdate'  required><br>
		<input type='text' name='email' placeholder='Email Address'  required><br>	
		<input type='text' name='contact' placeholder='Contact Number'  required><br>
		<textarea class="textarea" type='text' name='address' placeholder='Address'  required></textarea><br>
		<input id='submit-button' type='submit' value='Register'>

	</form>
	</div>
	</center>
	
</body>
</html>
