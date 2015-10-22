<?php 

	include('../setup.php'); 
	
	$query = "SELECT * FROM news LIMIT 1";
	$result = mysqli_query($con,$query);

	$news = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($news['article']);
	$limitString = $countString * 0.35;

	//select article_id,title,author,datepublished from articles limit 2 offset 1;

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
				<li id="nav-news"><a href="#">News</a></li>
				<li><a href="review.php">Review</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li id="nav-entertainment"><a href="entertainment.php">Entertainment</a></li>
			</ul>
		</div>
	</div>
</div>
<div style="clear:both"></div>	

<div id="news-body"><div id="news">News</div>
<!--
	<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $news['image'] ).'' . ");'"; ?> ></div>
	<div id="title"><?php  echo $news['title']; ?></div>
	<div id="author"><?php  echo "by " .$news['author'] ." | "; ?><span><?php  echo $featured['datepublished']; ?></span></div>
	<div id="preview"><?php echo substr($news['article'], 0 ,$limitString); ?></div> -->
	
	<div id="headnews" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $news['image'] ).'' . ");'"; ?>>
		<div id="title"><?php  echo $news['title']; ?></div><div style="clear:both"></div>	
		<div id="author"><?php  echo "by " .$news['author'] ?></div>
	</div>
	<div id="subnews-1st">

	<?php 
	
	$query = "SELECT * FROM news LIMIT 2 offset 1";
	$result = mysqli_query($con,$query);

	$news = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($news['article']);
	$limitString = $countString * 0.35;
	?>

		<div id="title"><?php  echo $news['title']; ?></div>
		<div id="preview"><?php echo substr($news['article'], 0 ,$limitString); ?></div>
		<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $news['image'] ).'' . ");'"; ?>></div>
	</div>
	<div style="clear:both"></div>	


	<?php 
	
	$query = "SELECT * FROM news LIMIT 3 offset 2";
	$result = mysqli_query($con,$query);

	$news = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($news['article']);
	$limitString = $countString * 0.35;
	?>

	<div id="subnews-2nd">

		<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $news['image'] ).'' . ");'"; ?> ></div>
		<div id="title"><?php  echo $news['title']; ?></div>
		<div id="preview"><?php echo substr($news['article'], 0 ,$limitString); ?></div>
	
	</div>


	<?php 
	
	$query = "SELECT * FROM news LIMIT 4 offset 3";
	$result = mysqli_query($con,$query);

	$news = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($news['article']);
	$limitString = $countString * 0.35;
	?>

	<div id="subnews-3rd">

		<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $news['image'] ).'' . ");'"; ?> ></div>
		<div id="title"><?php  echo $news['title']; ?></div>
		<div id="preview"><?php echo substr($news['article'], 0 ,$limitString); ?></div>
	
	</div>

	<?php 
	
	$query = "SELECT * FROM news LIMIT 5 offset 4";
	$result = mysqli_query($con,$query);

	$news = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($news['article']);
	$limitString = $countString * 0.35;
	?>

	<div id="subnews-4th">

		<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $news['image'] ).'' . ");'"; ?> ></div>
		<div id="title"><?php  echo $news['title']; ?></div>
		<div id="preview"><?php echo substr($news['article'], 0 ,$limitString); ?></div>
	
	</div>


</div>

<div style="clear:both"></div>	
<hr id="line">



<div id="mainBody">
	<div id="articles">
		<div id='article'>
		<?php 


			$sql = "SELECT * FROM news limit 8 offset 5";

			$result = mysqli_query($con, $sql);

			
			//SHOW RECORDS BY PASSING VALUES TO AN ARRAY
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {

			//limits the preview text on article 
			$countString = strlen($row['article']);
			$limitString = $countString * 0.35;

		?>

			<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $row['image'] ).'' . ");'"; ?> ></div>
			
			<?php

			echo "
			<div id='title'>".$row['title']."</div>";
			echo"
			<div id='preview'>".substr($row['article'],0 , $limitString)."</div>";
			echo "
			<div id='author'>"."by ".$row['author']." | ". $row['datepublished']."</div>";

			echo"
			<div id='social'>
				<i class='fa fa-facebook'></i>
				<i class='fa fa-twitter'></i>
				<i class='fa fa-google-plus'></i>
			</div>";

			echo "<br>";
			echo "
			<div style='clear:both'></div>
			<div id='border'></div>";
			//CLOSING TAG OF WHILE 
					}

			} ?>	

			
		</div>


	</div>


	<div id="sidebar">
		<div id="highlights"><span id="high">High</span><span id="lights">lights</span></div>
	
		<?php

			$sql = "SELECT * FROM articles";

			$result = mysqli_query($con, $sql);

			//SHOW RECORDS BY PASSING VALUES TO AN ARRAY
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {

			//limits the preview text on article 
			$countString = strlen($row['description']);
			$limitString = $countString * 0.10;

		?>
		<?php
		 echo '<div id="highlights-1st">'; ?>
			<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $row['image'] ).'' . ");'"; ?> ></div>
			
		<?php

			echo "
			<div id='title'>".$row['title']."</div>";
			echo"
			<div id='preview'>".substr($row['description'],0 , $limitString)."</div>";

			echo"</div>";
			//CLOSING TAG OF WHILE 
				}
			} 
			
		?>	

		
	
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

</body>
</html>