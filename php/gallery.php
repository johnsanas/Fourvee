<?php 

	include('../setup.php'); 
	
	$query = "SELECT * FROM gallery limit 1";
	$result = mysqli_query($con,$query);

	$gallery = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($gallery['article']);
	$limitString = $countString * 0.90;


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
				<li><a href="#">Gallery</a></li>
				<li id="nav-entertainment"><a href="entertainment.php">Entertainment</a></li>
			</ul>
		</div>
	</div>
</div>
<div style="clear:both"></div>	

<div class="gallery-body">
	<div class="gallery">Gallery</div>
</div>
	
<div style="clear:both"></div>	
<hr id="line">

<div class="gallery-body">
	<div class="head-gallery">
		<!--LOAD IMAGE -->
				
		<div class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $gallery['image'] ).'' . ");'"; ?>></div>
		<div class="title"><?php  echo $gallery['title']; ?></div>
		<div class="description"><?php echo substr($gallery['article'], 0 ,$limitString); ?></div>
		<div id="author"><?php  echo "by " .$gallery['author'] ?></div>
	</div>

	<div style="clear:both"></div>
	<hr id="line">

	<?php 
	
	$query = "SELECT * FROM gallery LIMIT 2 offset 1";
	$result = mysqli_query($con,$query);

	$gallery = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($gallery['article']);
	$limitString = $countString * 0.35;
	?>

	<div class="gallery-1st gallery-list">
		<div class="image" <div class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $gallery['image'] ).'' . ");'"; ?>><div class="views">41</div></div>
		<div class="title"><?php  echo $gallery['title']; ?></div>
	</div>

	<?php 
	
	$query = "SELECT * FROM gallery LIMIT 3 offset 2";
	$result = mysqli_query($con,$query);

	$gallery = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($gallery['article']);
	$limitString = $countString * 0.35;
	?>


	<div class="gallery-2nd gallery-list">
		<div class="image" <div class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $gallery['image'] ).'' . ");'"; ?>><div class="views">92</div></div>
		<div class="title"><?php  echo $gallery['title']; ?></div>
	</div>

	<?php 
	
	$query = "SELECT * FROM gallery LIMIT 4 offset 3";
	$result = mysqli_query($con,$query);

	$gallery = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($gallery['article']);
	$limitString = $countString * 0.35;
	?>

	<div class="gallery-3rd gallery-list">
		<div class="image" <div class="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $gallery['image'] ).'' . ");'"; ?>><div class="views">87</div></div>
		<div class="title"><?php  echo $gallery['title']; ?></div>
	</div>

	

</div>

<div style="clear:both"></div>
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