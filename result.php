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
if(isset($_POST['SubmitTopFruit'])) {
	// Check to see if the top fruit was right
	if(empty($_POST['TopFruit'])){
		// If the user didn't answer the question, ask them to answer it before proceeding
		echo "<p>Oops! Looks like you didn't input an answer. Please answer the question.</p>";
		// Print question
		echo "<p>" . $_SESSION['QuestionNumber'] ." ". $_SESSION['Questions'][$_SESSION['Counter']][question] . "</p>";
		// Create form with yes/no radio buttons to answer question
		echo "<form name='question' method='post' action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "'>";
		echo "<input type ='radio' name='TopFruit' value='yes'>Yes";
		echo "<input type ='radio' name='TopFruit' value='no'>No";
		echo "<p><input type='Submit' name='Submit1' value='Submit'></form>";
	}else {
		if($_POST['TopFruit'] == 'yes') {
			// If the top fruit was right tell them and invite them to play again
			echo "<p>I win! " . $_SESSION['user'] . ", let's play again!</p>";
			echo "<a href = 'index.php'>Start over</a>";

			// Unset and destroy the session
			session_unset();
			session_destroy();

		} elseif($_POST['TopFruit'] == 'no'){
			// If the top fruit was incorrect, ask them if it was the second top fruit
			echo "<p>Is your fruit ".$_SESSION['SecondTopFruit']."?</p>";
			// Print form for user to answer whether the second top fruit is correct
			echo "<form name='question' method='post' action='result2.php'>";
			echo "<input type ='radio' name='TopFruit' value='yes'>Yes";
			echo "<input type ='radio' name='TopFruit' value='no'>No";
			echo "<p><input type='Submit' name='SubmitSecondTopFruit' value='Submit'></p></form>";
		}
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
