<?php 

	include('../setup.php'); 
	
	$query = "SELECT * FROM entertainment limit 1";
	$result = mysqli_query($con,$query);

	$entertainment = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($entertainment['description']);
	$limitString = $countString * 0.35;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Fourvee | Latest Technology News Reviews</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css"></link>
</head>

<body>

<div id="header">
	<div id="leftHeader">
		<a href="../index.php"><div id="logo"></div></a>
	</div>
	<div id="rightHeader">
		<div id="navigation">
			<ul>
				<li id="nav-news"><a href="news.php">News</a></li>
				<li><a href="review.php">Review</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li id="nav-entertainment"><a href="#">Entertainment</a></li>
			</ul>
		</div>
	</div>
</div>
<div style="clear:both"></div>	

<div class="entertainment-body">
	<div class="entertainment">Entertainment</div>
	<div style="clear:both"></div>	


	<div class="head-entertainment">
		<div class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $entertainment['image'] ).'' . ");'"; ?>></div>
		<div class="title"><?php  echo $entertainment['title']; ?></div>
		<div class="author"><?php  echo "by " .$entertainment['author'] ?></div>
		<div class="preview"><?php echo substr($entertainment['description'], 0 ,$limitString); ?></div>
	</div>



	
		<?php 
			$query = "SELECT * FROM entertainment limit 2 offset 1";
			$result = mysqli_query($con,$query);

			$entertainment = mysqli_fetch_assoc($result);

			//limits the preview text on article 
			$countString = strlen($entertainment['description']);
			$limitString = $countString * 0.25;

		?>
	<div class="sub-entertainment1">
		<div class="image" class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $entertainment['image'] ).'' . ");'"; ?>></div>
		<div class="title"><?php  echo $entertainment['title']; ?></div>
		<div class="author"><?php  echo "by " .$entertainment['author'] ?></div>
		<div class="preview"><?php echo substr($entertainment['description'], 0 ,$limitString); ?></div>
		<div class="more">more <i class="fa fa-caret-down"></i></div>
	</div>


	<div style="clear:both"></div>	


	<?php 
			$query = "SELECT * FROM entertainment limit 4 offset 3";
			$result = mysqli_query($con,$query);

			$entertainment = mysqli_fetch_assoc($result);

			//limits the preview text on article 
			$countString = strlen($entertainment['description']);
			$limitString = $countString * 0.25;

		?>

	<div class="sub-entertainment2">
		<div class="image" class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $entertainment['image'] ).'' . ");'"; ?>></div>
		<div class="title"><?php  echo $entertainment['title']; ?></div>
		<div class="author"><?php  echo "by " .$entertainment['author'] ?></div>
		<div class="preview"><?php echo substr($entertainment['description'], 0 ,$limitString); ?></div>
	</div>

	<?php 
			$query = "SELECT * FROM entertainment limit 5 offset 4";
			$result = mysqli_query($con,$query);

			$entertainment = mysqli_fetch_assoc($result);

			//limits the preview text on article 
			$countString = strlen($entertainment['description']);
			$limitString = $countString * 0.25;

		?>

	<div class="sub-entertainment3">
		<div class="image" class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $entertainment['image'] ).'' . ");'"; ?>></div>
		<div class="title"><?php  echo $entertainment['title']; ?></div>
		<div class="author"><?php  echo "by " .$entertainment['author'] ?></div>
		<div class="preview"><?php echo substr($entertainment['description'], 0 ,$limitString); ?></div>
	</div>



	<div style="clear:both"></div>	
	<hr id="line">
</div>



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
<?php mysqli_close($con); ?>
</body>
</html>