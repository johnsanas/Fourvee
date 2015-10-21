<?php 

	include('setup.php'); 
	
	$query = "SELECT * FROM featuredarticle order by datepublished limit 1";
	$result = mysqli_query($con,$query);

	$featured = mysqli_fetch_assoc($result);

	//limits the preview text on article 
	$countString = strlen($featured['article']);
	$limitString = $countString * 0.35;

	//select article_id,title,author,datepublished from articles limit 2 offset 1;



?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$site_title". " | " ."$page_title"; ?></title>

	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"></link>
	
</head>

<body>

<div id="header">
	<div id="leftHeader">
		<a href="#"><div id="logo"></div></a>
	</div>
	<div id="rightHeader">
		<div id="navigation">
			<ul>
				<li id="nav-news"><a href="php/news.php">News</a></li>
				<li><a href="php/review.php">Review</a></li>
				<li><a href="php/gallery.php">Gallery</a></li>
				<li id="nav-entertainment"><a href="php/entertainment.php">Entertainment</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="mainArticle">
	<div id="headArticle">

		<!--LOAD IMAGE -->
				
		<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $featured['image'] ).'' . ");'"; ?> ></div>
		<div id="title"><a href="review.php"><?php  echo $featured['title']; ?></a></div>
		<div id="author"><?php  echo "by " .$featured['author'] ." | "; ?><span><?php  echo $featured['datepublished']; ?></span></div>
		<div id="preview"><?php echo substr($featured['article'], 0 ,$limitString); ?></div>
		<div id="social">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-google-plus"></i>
		</div>
	</div>


		<?php 

			//returns the limit value next to it
			$query = "SELECT * FROM featuredarticle LIMIT 2 offset 1";
			$result = mysqli_query($con,$query);

			$featured = mysqli_fetch_assoc($result);

			//limits the preview text on article 
			$countString = strlen($featured['article']);
			$limitString = $countString * 0.25;

		?>


	<div id="subArticle1">
		<div id="preview" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $featured['image'] ).'' . ");'"; ?> ></div>
		<div id="title"><?php  echo $featured['title']; ?></div>
		<div style="clear:both"></div>
		<div id="author"><?php  echo "by " . $featured['author']; ?></div>
		<div id="text-preview"><?php echo substr($featured['article'], 0 ,$limitString); ?></div>
		<div id="more">more <i class="fa fa-caret-down"></i></div>
	</div>
	
</div>

<div style="clear:both"></div>

<hr id="line">


<div id="mainBody">
	<div id="articles">
		<div id='article'>
		<?php 


			$sql = "SELECT * FROM articles limit 4";

			$result = mysqli_query($con, $sql);

			
			//SHOW RECORDS BY PASSING VALUES TO AN ARRAY
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {

			//limits the preview text on article 
			$countString = strlen($row['description']);
			$limitString = $countString * 0.35;

		?>

			<div id="image" <?php echo "style='background-image: url("; ?> <?php echo 'data:image/jpeg;base64,'.base64_encode( $row['image'] ).'' . ");'"; ?> ></div>
			
			<?php

			echo "
			<div id='title'>".$row['title']."</div>";
			echo"
			<div id='preview'>".substr($row['description'],0 , $limitString)."</div>";
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

<div id="featuredNews">
	<div id="featured-article"><span id="featured">Featured</span> <span id="article">Article</span></div>
	<div style="clear:both"></div>	
	<div class="featured1" id="featured-1st">
		<div id="image" style="background-image: url(img/mars.jpg);"></div>
		<div id="preview">Our ongoing missions to Mars are over 50 years in the making</div>
	</div>
	<div class="featured2" id="featured-1st">
		<div id="image" style="background-image: url(img/hidelux.jpg);"></div>
		<div id="preview">The weird and the wonderful from Japan's biggest tech show</div>
	</div>
	<div class="featured3" id="featured-1st">
		<div id="image" style="background-image: url(img/marshmallow.jpg);"></div>
		<div id="preview">Which Android devices are getting Marshmallow and when?</div>
	</div>

	<div style="clear:both"></div>	
	<div class="featured4" id="featured-1st">
		<div id="image" style="background-image: url(img/expect.jpg);"></div>
		<div id="preview">What to expect from Microsoft's Windows 10 device event</div>
	</div>
	<div class="featured5" id="featured-1st">
		<div id="image" style="background-image: url(img/citizenkane.jpg);"></div>
		<div id="preview">'Citizen Kane' to 'Call of Duty': The rise of video games in universities</div>
	</div>
	<div class="featured6" id="featured-1st">
		<div id="image" style="background-image: url(img/mice.jpg);"></div>
		<div id="preview">Logitech or A4tech: Which mice are worth buying? Mx Masterss</div>
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
		<div id="facebook" style="background-image: url(img/facebook.png);"></div>
		<div id="twitter" style="background-image: url(img/twitter.png);"></div>
		<div id="googleplus" style="background-image: url(img/google.png);"></div>
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