<?php
session_start();
?>
<html>
<head>
<title>20 Questions Thank You</title>
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
if(isset($_POST['AddFruit'])) {
	$_SESSION['TemporaryFruit']['name'] = $_POST['FruitName'];

	$FruitRepeats = 0;

	// Check through the temporary fruit table to see how many times it's in there
	foreach($_SESSION['TempFruitTable'] as $Temp){
		if($Temp['name'] == $_SESSION['TemporaryFruit']['name']){
			$FruitRepeats++;
		}
	}

	// If the fruit isn't in the temporary table more than 5 times, so ahead and process it to add to the temporary table
	if($FruitRepeats < 5){
		// Iterate through each of the user's inputs
		for($i=1;$i<=$_SESSION['NumberQuestions'];$i++){
			// If the question wasn't used during the main game
			if(!empty($_SESSION['Questions'][$i]['id']) && $_SESSION['Questions'][$i]['Used'] == 0){
				// Add the appropriate answer to the temporary fruit based on whether they answered yes/no
				if($_POST['q' . $_SESSION['Questions'][$i]['id']] == 'yes'){
					$_SESSION['TemporaryFruit']['q' . $_SESSION['Questions'][$i]['id']] = 1;
				}elseif($_POST['q' . $_SESSION['Questions'][$i]['id']] == 'no'){
					$_SESSION['TemporaryFruit']['q' . $_SESSION['Questions'][$i]['id']] = 0;
				}
			}
		}
		// Send the temporary fruit to a function that will write it to the database
		WriteNewFruitToDatabase();
	}else {
		//TO DO: Write logic for removing fruit from temporary table and adding to fruit table

	echo "<p>Thank you for helping to make me smarter.</p>";
	}
}

function WriteNewFruitToDatabase(){
	// Create variable to access MySQL database
	$servername = "localhost";
	$username = "mikagere_write";
	$password = "zIFVeu2p2Ohy";
	$dbname = "mikagere_20Qs";

	// Create connection to database
	$conn = new mysqli($servername, $username, $password, $dbname);

	// If there is a connection error show error message
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	// Create crazy SQL statement to push the new fruit values to the temporary database
	$InsertSQL = "INSERT INTO TemporaryFruit (name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12,
	q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25)
	VALUES ('" . $_SESSION['TemporaryFruit']['name'] . "', " .
	$_SESSION['TemporaryFruit']['q1'] . ", " . $_SESSION['TemporaryFruit']['q2'] . ", " . $_SESSION['TemporaryFruit']['q3'] . ", " .
	$_SESSION['TemporaryFruit']['q4'] . ", " . $_SESSION['TemporaryFruit']['q5'] . ", " . $_SESSION['TemporaryFruit']['q6'] . ", " .
	$_SESSION['TemporaryFruit']['q7'] . ", " . $_SESSION['TemporaryFruit']['q8'] . ", " . $_SESSION['TemporaryFruit']['q9'] . ", " .
	$_SESSION['TemporaryFruit']['q10'] . ", " . $_SESSION['TemporaryFruit']['q11'] . ", " . $_SESSION['TemporaryFruit']['q12'] . ", " .
	$_SESSION['TemporaryFruit']['q13'] . ", " . $_SESSION['TemporaryFruit']['q14'] . ", " . $_SESSION['TemporaryFruit']['q15'] . ", " .
	$_SESSION['TemporaryFruit']['q16'] . ", " . $_SESSION['TemporaryFruit']['q17'] . ", " . $_SESSION['TemporaryFruit']['q18'] . ", " .
	$_SESSION['TemporaryFruit']['q19'] . ", " . $_SESSION['TemporaryFruit']['q20'] . ", " . $_SESSION['TemporaryFruit']['q21'] . ", " .
	$_SESSION['TemporaryFruit']['q22'] . ", " . $_SESSION['TemporaryFruit']['q23'] . ", " . $_SESSION['TemporaryFruit']['q24'] . ", " .
	$_SESSION['TemporaryFruit']['q25'] . ")";

	// Run SQL statement on the database connection and check if it was successful
	if($conn->query($InsertSQL) === TRUE){
		echo "<p>Thank you for adding the new fruit to the database.</p>";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>
<p>
<a href="index.php"> Start over</a>
</p>
				</div>
			</div><!--/content-one-->
		</div><!--/bg-content-one-->
	</div><!--/content-->
</div><!--/content-->
<?php get_footer(); ?>
</body>
</html>
