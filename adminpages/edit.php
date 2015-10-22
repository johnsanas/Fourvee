<?php 


	include('adminsetup.php');

	session_start();

	$admin_id = $_SESSION["admin_id"];

	$query = "SELECT * FROM admin where admin_id = $admin_id ";
	$con = mysqli_connect("localhost","root","","fourvee");
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
		#search {margin: 5px;font-size: 1em; padding: 5px; border-radius: 5px solid black;}
		#find{margin: 5px;padding:5px;}
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
		<form method="get">
			<input id="search" name="search" type="text" placeholder="search">
			<input  id="find" type="submit" value="Find">
		</form>
	</center>
	<?php 

		if (isset($_GET['search'])){
			 $search = test_input($_GET["search"]);
		}else {
				$GET['search'] = "";
				$search = null;
		}

	
		$sql = "SELECT * FROM frontend where user_id like('%$search%') limit 1";

		$result = mysqli_query($con, $sql);



		//SHOW RECORDS BY PASSING VALUES TO AN ARRAY
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$username = $row['username'];
	


	 $_SESSION["search"] = $search;

	?>



	<center>
	<p id="create">Edit Account</p>
	<div id='form-container'>
	<form method='post' action="updatesuccess.php" enctype="multipart/form-data">
		<input id="file" type="file" name="fileToUpload" ><br>
		Username<input id='username' type='text' name='username' required value =<?php echo $row['username'];?>><br>
		Password<input type='text' name='password' placeholder='Password' required value =<?php echo $row['password'];?>><br>
		First Name<input type='text' name='firstname' placeholder='First Name' required  value =<?php echo $row['firstname'];?>><br>
		Middle Name<input type='text' name='middlename' placeholder='Middle Name (Optional)' value =<?php echo $row['middlename'];?>><br>
		Last Name<input type='text' name='lastname' placeholder='lastname' required value =<?php echo $row['lastname'];?>><br>
		Birthdate<input class='date' type='date' name='bday' placeholder='Birthdate'  required value =<?php echo $row['birthdate'];?>><br>
		Email<input type='text' name='email' placeholder='Email Address'  required value =<?php echo $row['email'];?>><br>	
		Contact<input type='text' name='contact' placeholder='Contact Number'  required value =<?php echo $row['contact'];?>><br>
		Address<textarea class="textarea" type='text' name='address' maxlength ='100' placeholder=<?php echo $row['address'];?>></textarea><br>
		<input id='submit-button' type='submit' value='Update'>

	</form>
	</div>
	</center>
	<?php  }}
		else{
			echo"<td><center>No Records Found</center></td>";} ?>
</body>
</html>
