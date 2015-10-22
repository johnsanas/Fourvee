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

		table { 

			color: #333;
			collapse; border-spacing: 0; 
			}

			td, th { 
			border: 1px solid transparent; /* No more visible border */
			height: 30px; 
			transition: all 0.3s;  /* Simple transition for hover effect */
			}

			th {
			background: #DFDFDF;  /* Darken header a bit */
			font-weight: bold;
			margin: 0px 5px;
			padding: 0px 5px;
	
			}

			td {
			background: #FAFAFA;
			text-align: center;
			}

		
			/* Cells in even rows (2,4,6...) are one color */ 
			tr:nth-child(even) td { background: #F1F1F1; }   

			/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
			tr:nth-child(odd) td { background: #FEFEFE; }  

			tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */
			#spacer{margin-top: 100px;}

			#account{font-size: 2.5em; margin: 10px 0px;}
			#search{padding: 5px; margin: 5px; border-radius: 5px solid black;}
			#find{padding: 5px;}


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
	        <li><a href="#">Log</a></li>
	   
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

	<p id="account">Accounts</p>
	<table>

		<tr>
			<th>User_id</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Bday</th>
		</tr>

	<?php 

		if (isset($_GET['search'])){
			 $search = test_input($_GET["search"]);
		}else {
				$GET['search'] = "";
				$search = null;
		}

	
		$sql = "SELECT * FROM frontend where user_id like('%$search%')";

		$result = mysqli_query($con, $sql);

		

		//SHOW RECORDS BY PASSING VALUES TO AN ARRAY
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {

			$name = $row['firstname'] ." ". substr($row['firstname'], 0,1) .".  ". $row['lastname'];	

			$_SESSION["search"] = $search;	
	?>
	
		<tr>
		    <th><?php echo $row['user_id']; ?></th>
		    <th><?php echo $name; ?></th>
		    <th><?php echo $row['username']; ?></th>
		    <th><?php echo $row['email']; ?></th>
		    <th><?php echo $row['contact']; ?></th>
		    <th><?php echo $row['address']; ?></th>
		    <th><?php echo $row['birthdate']; ?></th>
		</tr>

		<?php  }}
		else{
			echo"<td><center>No Records Found</center></td>";} ?>

	
	</table>
	</center>



</body>
</html>
