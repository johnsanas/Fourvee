	
<?php 

		session_start();

	  $search = $_SESSION["search"];

	$con = mysqli_connect("localhost","root","","fourvee");

	$username = $_POST['username'];
	$password =  $_POST['password'];
	$firstname =  $_POST['firstname'];
	$middlename =  $_POST['middlename'];
	$lastname =  $_POST['lastname'];
	$birthdate =  $_POST['bday'];
	$email =  $_POST['email'];
	$contact =  $_POST['contact'];;
	$address =  $_POST['address'];



	$query = "UPDATE frontend SET username='$username', password='$password', firstname='$firstname',middlename='$middlename',lastname='$lastname',
		birthdate='$birthdate', email='$email' ,contact = '$contact', address='$address'  WHERE user_id = $search";
	
	mysqli_query($con,$query);

	
	mysqli_errno($con);

	mysqli_close($con);
	


?>
<?php 

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
	<div id="update">Account Succesfully Updated !"</div>
	<?php echo $search; ?>
	</center>
</body>
</html>

