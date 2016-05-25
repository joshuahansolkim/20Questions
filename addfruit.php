<?php
session_start();
?>
<html>
<head>
<title>20 Questions Add Fruit</title>
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


<!-- Create a form for the user to finish answering all the questions that weren't asked -->
<FORM name="form1" method="post" action="ThankYou.php">
<!-- Create a place for the user to put the name of the fruit -->
Name of fruit: <input type="text" name="FruitName"><br>

<?php
// Check to see if the user submitted the form
if(isset($_POST['AddFruit'])) {
	// Iterate through all the questions
	foreach($_SESSION['Questions'] as $q){
		// Check to see if the question has been asked
		if(!empty($q['id']) && $q['Used'] == 0){
			// If the question hasn't been asked, print it with yes/no radion buttons for the user to answer
			echo "<p>" . $q['question'];
			echo "<input type ='radio' name=q" . $q['id'] . " value='yes'>Yes";
			echo "<input type ='radio' name=q" . $q['id'] . " value='no'>No</p>";
		}
	}
}
?>
<!-- Create a submit button for the form-->
<p><Input type="Submit" name="AddFruit" VALUE="Submit">
</FORM>
				</div>
			</div><!--/content-one-->
		</div><!--/bg-content-one-->
	</div><!--/content-->
</div><!--/content-->
<?php get_footer(); ?>
</body>
</html>
