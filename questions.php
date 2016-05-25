<?php
session_start();
?>
<html>
<head>
<title>20 Questions</title>
</head>
<body>
<?php
// Check to see if the user submitted
if(isset($_POST['Submit1'])){
	// Check to make sure that the user actually answered the question
	if(empty($_POST['facts'])){
		// If the user didn't answer the question, ask them to answer it before proceeding
		echo "<p>Oops! Looks like you didn't input an answer. Please answer the question.</p>";
		// Print question
		echo "<p>" . $_SESSION['QuestionNumber'] ." ". $_SESSION['Questions'][$_SESSION['Counter']][question] . "</p>";
		// Create form with yes/no radio buttons to answer question
		echo "<form name='question' method='post' action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "'>";
		echo "<input type ='radio' name='facts' value='yes'>Yes";
		echo "<input type ='radio' name='facts' value='no'>No";
		echo "<p><input type='Submit' name='Submit1' value='Submit'></form>";
	}else {
		// If user did answer the question proceed
		if($_POST['facts'] == 'yes'){
			// If user answered yes, use switch-case statement to figure out which question is was,
			// then iterate through each fruit and compare the answer with the fruits answer for that questions,
			// if they match then increment the score.
			switch($_SESSION['Counter']){
				case 1:
					$_SESSION['TemporaryFruit']['q1'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q1'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 2:
					$_SESSION['TemporaryFruit']['q2'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q2'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 3:
					$_SESSION['TemporaryFruit']['q3'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q3'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 4:
					$_SESSION['TemporaryFruit']['q4'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q4'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 5:
					$_SESSION['TemporaryFruit']['q5'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q5'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 6:
					$_SESSION['TemporaryFruit']['q6'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q6'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 7:
					$_SESSION['TemporaryFruit']['q7'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q7'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 8:
					$_SESSION['TemporaryFruit']['q8'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q8'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 9:
					$_SESSION['TemporaryFruit']['q9'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q9'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 10:
					$_SESSION['TemporaryFruit']['q10'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q10'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 11:
					$_SESSION['TemporaryFruit']['q11'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q11'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 12:
					$_SESSION['TemporaryFruit']['q12'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q12'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 13:
					$_SESSION['TemporaryFruit']['q13'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q13'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 14:
					$_SESSION['TemporaryFruit']['q14'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q14'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 15:
					$_SESSION['TemporaryFruit']['q15'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q15'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 16:
					$_SESSION['TemporaryFruit']['q16'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q16'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 17:
					$_SESSION['TemporaryFruit']['q17'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q17'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 18:
					$_SESSION['TemporaryFruit']['q18'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q18'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 19:
					$_SESSION['TemporaryFruit']['q19'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q19'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 20:
					$_SESSION['TemporaryFruit']['q20'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q20'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 21:
					$_SESSION['TemporaryFruit']['q21'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q21'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 22:
					$_SESSION['TemporaryFruit']['q22'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q22'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 23:
					$_SESSION['TemporaryFruit']['q23'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q23'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 24:
					$_SESSION['TemporaryFruit']['q24'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q24'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 25:
					$_SESSION['TemporaryFruit']['q25'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q25'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 26:
					$_SESSION['TemporaryFruit']['q26'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q26'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 27:
					$_SESSION['TemporaryFruit']['q27'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q27'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 28:
					$_SESSION['TemporaryFruit']['q28'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q28'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 29:
					$_SESSION['TemporaryFruit']['q29'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q29'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 30:
					$_SESSION['TemporaryFruit']['q30'] = 1;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q30'] == "1"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
			}
		}
		elseif ($_POST['facts'] == 'no'){
			// If user answered no, use switch-case statement to figure out which question is was,
			// then iterate through each fruit and compare the answer with the fruits answer for that questions,
			// if they match then increment the score.
			switch($_SESSION['Counter']){
				case 1:
					$_SESSION['TemporaryFruit']['q1'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q1'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 2:
					$_SESSION['TemporaryFruit']['q2'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q2'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 3:
					$_SESSION['TemporaryFruit']['q3'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q3'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 4:
					$_SESSION['TemporaryFruit']['q4'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q4'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 5:
					$_SESSION['TemporaryFruit']['q5'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q5'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 6:
					$_SESSION['TemporaryFruit']['q6'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q6'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 7:
					$_SESSION['TemporaryFruit']['q7'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q7'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 8:
					$_SESSION['TemporaryFruit']['q8'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q8'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 9:
					$_SESSION['TemporaryFruit']['q9'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q9'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 10:
					$_SESSION['TemporaryFruit']['q10'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q10'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 11:
					$_SESSION['TemporaryFruit']['q11'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q11'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 12:
					$_SESSION['TemporaryFruit']['q12'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q12'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 13:
					$_SESSION['TemporaryFruit']['q13'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q13'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 14:
					$_SESSION['TemporaryFruit']['q14'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q14'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 15:
					$_SESSION['TemporaryFruit']['q15'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q15'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 16:
					$_SESSION['TemporaryFruit']['q16'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q16'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 17:
					$_SESSION['TemporaryFruit']['q17'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q17'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 18:
					$_SESSION['TemporaryFruit']['q18'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q18'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 19:
					$_SESSION['TemporaryFruit']['q19'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q19'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 20:
					$_SESSION['TemporaryFruit']['q20'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q20'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 21:
					$_SESSION['TemporaryFruit']['q21'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q21'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 22:
					$_SESSION['TemporaryFruit']['q22'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q22'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 23:
					$_SESSION['TemporaryFruit']['q23'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q23'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 24:
					$_SESSION['TemporaryFruit']['q24'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q24'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 25:
					$_SESSION['TemporaryFruit']['q25'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q25'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 26:
					$_SESSION['TemporaryFruit']['q26'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q26'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 27:
					$_SESSION['TemporaryFruit']['q27'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q27'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 28:
					$_SESSION['TemporaryFruit']['q28'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q28'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 29:
					$_SESSION['TemporaryFruit']['q29'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q29'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
				case 30:
					$_SESSION['TemporaryFruit']['q30'] = 0;
					for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
						if($_SESSION['Fruit'][$i]['q30'] == "0"){
							$_SESSION['Fruit'][$i]['score']++;
						}
					}
					break;
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
			$_SESSION['Fruit'][$TopIndex-1]['score'] = 0;
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
	$_SESSION['Counter'] = rand(0,$_SESSION['NumberQuestions']-1);
	// Check to see if the question corresponding with the random integer has been used
	if($_SESSION['Questions'][$_SESSION['Counter']]['Used'] == 0){
		// If the question hasn't been used, ask the question
		// Increment the counter to keep track of how many questions have been asked
		$_SESSION['QuestionNumber']++;
		// Ask the question to the user
		echo "<p>" . $_SESSION['QuestionNumber'] ." ". $_SESSION['Questions'][$_SESSION['Counter']]['question'] . "</p>";
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


</body>
</html>
