<?php
session_start();
?>

<html>
    <head>
        <title>20 Questions</title>
    </head>
    <body>
        <?php
            // TODO: Check to see if there is already a user, figure out how to handle when user hits back button

            // Create a session array entry with the user's name
            $_SESSION['user'] = $_POST['name'];
            // Create a random number
            $_SESSION['Counter'] = rand(1,$_SESSION['NumberQuestions']);
        ?>
        <!-- Create a form for the user to input their answer to the question -->

        <div>20 Questions</div>

        <?php
            // Ask the question that corresponds with the random number
            $_SESSION['QuestionNumber']++;
            echo "<p>Question #" . $_SESSION['QuestionNumber'] .": ". $_SESSION['Questions'][$_SESSION['Counter']][question] . "</p>";
            $_SESSION['Questions'][$_SESSION['Counter']]['Used'] = 1;
        ?>
        <form name='question' method='post' action='questions2.php'>
            <input type ='radio' name='facts' value='yes'>Yes
            <input type ='radio' name='facts' value='no'>No
            <p><input type='Submit' name='Submit1' value='Submit'>
        </form>

        <!--
        <p><form name='question' method='post' action='questions2.php'>
        <input type='Submit' name='facts' value='Yes'></form>
        <form name='question' method='post' action='questions2.php'>
        <input type='Submit' name='facts' value='No'></form></p>
        -->
    </body>
</html>
