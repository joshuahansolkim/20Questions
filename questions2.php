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
// Check to see if the user submitted
if(isset($_POST['Submit1'])){
	// Check to make sure that the user actually answered the question
	if(empty($_POST['facts'])){
		// If the user didn't answer the question, ask them to answer it before proceeding
		echo "<p>Oops! Looks like you didn't input an answer. Please answer the question.</p>";
		// Print question
		echo "<p>Question #" . $_SESSION['QuestionNumber'] .": ". $_SESSION['Questions'][$_SESSION['Counter']][question] . "</p>";
		// Create form with yes/no radio buttons to answer question
		echo "<form name='question' method='post' action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "'>";
		echo "<input type ='radio' name='facts' value='yes'>Yes";
		echo "<input type ='radio' name='facts' value='no'>No";
		echo "<p><input type='Submit' name='Submit1' value='Submit'></form>";
	}else {
		// If user did answer the question proceed
		if($_POST['facts'] == 'yes'){
			// If user answered yes, then iterate through each fruit and compare the answer with the fruits answer for that questions,
			// if they match then increment the score, also add it to the temporary fruit array.
			$_SESSION['TemporaryFruit']['q'.$_SESSION['Counter']] = 1;
			for($i=1;$i<=$_SESSION['NumberFruits'];$i++){
				if($_SESSION['Fruit'][$i]['q'.$_SESSION['Counter']] == "1"){
					$_SESSION['Fruit'][$i]['score']++;
				}
			}
		} elseif ($_POST['facts'] == 'no'){
			// If user answered no, then iterate through each fruit and compare the answer with the fruits answer for that questions,
			// if they match then increment the score, also add it to the temporary fruit array.
			$_SESSION['TemporaryFruit']['q'.$_SESSION['Counter']] = 0;
			for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
				if($_SESSION['Fruit'][$i]['q'.$_SESSION['Counter']] == "0"){
					$_SESSION['Fruit'][$i]['score']++;
				}
			}
		}

		// Check to see how many questions have been asked
		if($_SESSION['QuestionNumber'] < 20){
			// If less than 20 questions have been asked, run function to ask another question
			ask();
		} else {
			// If more than 20 questions have been asked, tally up the scores for the best match, and second best match
			$Max = 0;
			$TopIndex = 0;
			// $_SESSION['TopFruit'] = $_SESSION['Fruit'][1]['name'];

			// Loop through all the fruit and compare their scores
			foreach($_SESSION['Fruit'] as $f){
				// Check to see if the current fruit has a higher score than the top fruit
				if($f['score'] > $Max){
					// If the current fruit has a higher score, then change the max score to the higher score
					// and change the fruit to the current fruit
					$Max = $f['score'];
					$_SESSION['TopFruit'] = $f['name'];
					$TopIndex = key($_SESSION['Fruit']);
				}
			}
			// Reset the score for the highest fruit so that it won't show up in the search for the second top highest fruit
			$_SESSION['Fruit'][$TopIndex+1]['score'] = 0;
			$Max = 0;
			// Loop through all the fruit and compare their scores
			foreach($_SESSION['Fruit'] as $f){
				// Check to see if the current fruit has a higher score than the top fruit
				if($f['score'] > $Max){
					// If the current fruit has a higher score, then change the max score to the higher score
					// and change the fruit to the current fruit
					$Max = $f['score'];
					$_SESSION['SecondTopFruit'] = $f['name'];
				}
			}
			// Print a form asking the user if their fruit is the top fruit that you found.
			echo "<p>Is your fruit ".$_SESSION['TopFruit']."?";
			echo "<form name='question' method='post' action='result.php'>";
			echo "<input type ='radio' name='TopFruit' value='yes'>Yes";
			echo "<input type ='radio' name='TopFruit' value='no'>No";
			echo "<p><input type='Submit' name='SubmitTopFruit' value='Submit'></form>";
		}
	}

}

// Function to ask the user a random question
function ask(){
	// Create a random integer
	$_SESSION['Counter'] = rand(1,$_SESSION['NumberQuestions']);
	// Check to see if the question corresponding with the random integer has been used
	if($_SESSION['Questions'][$_SESSION['Counter']]['Used'] == 0){
		// If the question hasn't been used, ask the question
		// Increment the counter to keep track of how many questions have been asked
		$_SESSION['QuestionNumber']++;
		// Ask the question to the user
		echo "<p>Questions #" . $_SESSION['QuestionNumber'] .": ". $_SESSION['Questions'][$_SESSION['Counter']]['question'] . "</p>";
		// Change the used value of the question so we know it's been asked
		$_SESSION['Questions'][$_SESSION['Counter']]['Used'] = 1;
		// Print a form for the user to input their answer
		echo "<form name='question' method='post' action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "'>";
		echo "<input type ='radio' name='facts' value='yes'>Yes";
		echo "<input type ='radio' name='facts' value='no'>No";
		echo "<p><input type='Submit' name='Submit1' value='Submit'></form>";

	// If the question corresponding to the random number has been asked
	} else {
		// Recursively call the function to ask another question
		ask();
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
