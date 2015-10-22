
<?php 



$prompt = "";

$username = $password = $currentUsernane = $curretnPassword = $firstname = $passfirstName = "";
$passAccount = $passPassword = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 
  if (isset($_POST['username'])){
	 $username = test_input($_POST["username"]);
  }else {
		$_POST['username'] = "";
		$username = null;
   }

  if (isset($_POST['password'])){
		$password = test_input($_POST["password"]);
   }else {
		$_POST['password'] = "";
		$password = null;
   }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$con = mysqli_connect("localhost","root","","fourvee");
if ((isset($_POST['username'])) && (isset($_POST['password']))){


$sql = mysqli_query($con,"SELECT * FROM admin WHERE username LIKE ('$username') 
		AND password LIKE ('$password')");

while($row = mysqli_fetch_array($sql)) {
	  $passAccount = $row['username'];
	  $passPassword = $row['password'];
	  $admin_id = $row['admin_id'];

	}

if (($passAccount == "") && ($passPassword == "")){

	$prompt = "Invalid Username / Password !"; 
}else{


	session_start();
	$_SESSION["admin_id"] = $admin_id;
	
	header("location:menu.php");
	

}

}



?>
