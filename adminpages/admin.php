<?php 

	include('adminsetup.php');

	session_start();
?>

<html>
<head>
		<style>
			#form-container{ margin:0px auto; background-color: #e9e9e9; width:400px; height: 300px; margin-top: 10%; border-radius: 10px; }
			#form-container #log-in{font-size:1.4em; padding-top: 30px; }
			#form-container form input{font-size: 1em; padding: 5px; margin: 3px; border-radius: 5px; border:1px solid #616466;}
			#form-container #username {margin-top: 40px;}
			#form-container #submit-button{margin-top: 20px; padding: 5px 10px;}
			#form-container #prompt-label{border:none;}

			#logo {
				background-image: url(../img/Logo.png);
				background-size: contain;
				background-repeat: no-repeat;
				width: 165px;
				height: 50px;
				margin-top: 10px;
			}
			#spacer {padding: 110px 0px;}
		</style>

	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css"></link>

</head>
<body>
<center>
<div id='form-container'>
<div id='log-in'><a href="../index.php"><div id="logo"></div></a></div>
<form method='post'>
	<input id='username' type='text' name='username' placeholder='Username' required><br>
	<input type='password' name='password' placeholder='Password' required><br>
	<input id='submit-button'type='submit' value='Log in'><br>
	<?php echo "<p>$prompt</p>" ?>
</form>
</div>
</center>
<div id="spacer"></div>

	
<div id="footer">
	<center>

	<div id="nav">
		<ul>
			<li>News</li>
			<li>Review</li>
			<li>Gallery</li>
			<li>Entertainment</li>
		</ul>
	</div>
	<div id="social">
		<div id="facebook" style="background-image: url(../img/facebook.png);"></div>
		<div id="twitter" style="background-image: url(../img/twitter.png);"></div>
		<div id="googleplus" style="background-image: url(../img/google.png);"></div>
	</div>
	<div style="clear:both"></div>	
	<div id="more-info">
		<ul>
			<li>About</li>
			<li>Contact</li>
			<li>Privacy Policy</li>
			<li>Terms of Use</li>
			<li>Advertise</li>
		</ul>
	</div>
	</center>
</div>
</body>
</html>


