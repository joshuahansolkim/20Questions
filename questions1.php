<?php
session_start();
?>

<html>
<head>
<title>20 Questions</title>
</head>
<body>
<?php
	// Code to use the wordpress theme that is currently being used by website
	require('../wp-blog-header.php' );
	get_header();
	$prefix = 'tk_';
	$sidebar_position = get_post_meta($post->ID, $prefix.'sidebar_position', true);
	// Create a session array entry with the user's name
	$_SESSION['user'] = $_POST['name'];
	// Create a random number
	$_SESSION['Counter'] = rand(1,$_SESSION['NumberQuestions']);
?>
<!-- Create a form for the user to input their answer to the question -->
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
							// Ask the question that corresponds with the random number
							$_SESSION['QuestionNumber']++;
							echo "<p>Question #" . $_SESSION['QuestionNumber'] .": ". $_SESSION['Questions'][$_SESSION['Counter']][question] . "</p>";
							$_SESSION['Questions'][$_SESSION['Counter']]['Used'] = 1;
						?>
						<form name='question' method='post' action='questions2.php'>
						<input type ='radio' name='facts' value='yes'>Yes
						<input type ='radio' name='facts' value='no'>No
						<p><input type='Submit' name='Submit1' value='Submit'></form>
					</div>
			</div><!--/content-one-->
	</div><!--/bg-content-one-->
</div><!--/content-->
</div><!--/content-->
<?php get_footer(); ?>
	<!--
	<p><form name='question' method='post' action='questions2.php'>
	<input type='Submit' name='facts' value='Yes'></form>
	<form name='question' method='post' action='questions2.php'>
	<input type='Submit' name='facts' value='No'></form></p>
	-->
</body>
</html>
