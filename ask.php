<?php
session_start();
?>

<html>
<head>
<title>20 Questions</title>
</head>
<body>

<FORM name="question" method="post" action="questions.php">

<?php

$Counter = rand(1,24);
	if ($_SESSION['Questions'][$Counter][Used] == 0){
		$_SESSION['QuestionNumber']++;
		echo "<p>" . $_SESSION['Questions'][$Counter][question] . "</p>";

		$_SESSION['Questions'][$Counter][Used] = 1;

		echo "<Input type ='Radio' Name='Q" . $QuestionNumber . "' value='yes'>Yes";
		echo "<Input type ='Radio' Name='Q" . $QuestionNumber . "' value='no'>No";

		$yes_status = 'unchecked';
		$no_status = 'unchecked';

		if(isset($POST['Submit1'])){
			$selected_radio=$_POST['Facts'];
			if($selected_radio == 'yes'){
				$yes_status = 'checked';
			} elseif ($selected_radio == 'no') {
				$no_status = 'checked';
			}
		}
	} else {
	$i--;
	}
?>

<p>

<Input type="Submit" name="Submit1" VALUE="Submit">

</FORM>
</body>
</html>
