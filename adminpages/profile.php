<?php 


	include('menu.php');



	$con = mysqli_connect("localhost","root","","fourvee");

	$query = "SELECT * FROM adminprofile limit 1";
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

		.banner{width: 100%;height: 400px;background-color: black;margin-top: 20px; background-size: cover;background-repeat: no-repeat;}
		.picture {float:left; width: 200px; height: 200px; background-color: white; border-radius: 50%;margin-top: 280px; margin-left: 150px; background-size: cover;background-repeat: no-repeat;}
		#name {font-size: 3em;margin-top: 20px;}
		#about table{font-size: 1.2em; margin-left: 350px;margin-top: 20px;}
		#about table td{padding: 2px 15px;}
	</style>
</head>

<body>
<div class="banner" style="background-image:url(../img/zebra.jpg)">
	<div class="picture" style="background-image:url(../img/smartglass.jpg)"></div>
</div>
<div id="name">John H. Villete</div>
<div id="about"> 
	<table>
		<tr>
			<td>Age:</td> <td>19years old</td>
		</tr>

		<tr>
			<td>Studies at:</td> <td>University of Makati</td>
		</tr>

		<tr>
			<td>Lives at</td> <td>Taguig City</td>
		</tr>

		<tr>
			<td>Hobbies</td> <td>Eating</td>
		</tr>

		<tr>
			<td>Graduated at</td> <td>University of Makati</td>
		</tr>
		
	</table>
</div>
</body>
</html>