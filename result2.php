<?php
session_start();
?>
<html>
<head>
<title>20 Questions Result</title>
</head>
<body>

<?php
	// Code to use the wordpress theme that is currently being used by website
	require('../wp-blog-header.php' );
	get_header();
	$prefix = 'tk_';
	$sidebar_position = get_post_meta($post->ID, $prefix.'sidebar_position', true);
?>
<!-- CONTENT -->
<div class="content left">
	<div class="bg-content-one left">
		<!--SIDBAR-->
		<?php tk_get_left_sidebar('Left', 'Page Template')?>
		<div class="content-right right">
			<div class="title-page-content-right left">20 Questions</div><!--title-page-content-right-->
			<div class="portfolio-content left">
				<div class="shortcodes left">

<?php
// Check to see if the user submitted the form
if(isset($_POST['SubmitSecondTopFruit'])) {
	if($_POST['TopFruit'] == 'yes') {
		// If the top fruit was right tell them and invite them to play again
		echo "<p>I win! " . $_SESSION['user'] . ", let's play again!</p><a href = 'index.php'>Start over</a>";

		// Unset and destroy the session
		session_unset();
		session_destroy();

	} elseif($_POST['TopFruit'] == 'no'){
	//var_dump($_SESSION['SecondTopFruit']);
		// If the second top fruit was also not correct, ask them if they will add the fruit to the database
		echo "<p>Wow! " . $_SESSION['user'] . ", you win!</p><p>Would you be willing to help me make this game better by adding your fruit?";
		// Print form for user to indicate whether they will enter the fruit into the database or not
		echo "<p><form name='Help' method='post' action='addfruit.php'>";
		echo "<input type='Submit' name='AddFruit' value='Yes'></form>";
		echo "<form name='Help' method='post' action='index.php'>";
		echo "<input type='Submit' name='DontAddFruit' value='No'></form></p>";
	}
}
?>
				</div>
			</div><!--/content-one-->
		</div><!--/bg-content-one-->
	</div><!--/content-->
</div><!--/content-->
<?php get_footer(); ?>
</body>
</html>
