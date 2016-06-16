<?php
session_start();
?>
<html>
    <head>
        <title>20 Questions Result</title>
    </head>
    <body>
        <?php
            // Check to see if the user submitted the form
            if(isset($_POST['SubmitSecondTopFruit'])) {
                if($_POST['SecondTopFruit'] == 'yes') {
                    // If the top fruit was right tell them and invite them to play again
                    echo "<p>I was so close! " . $_SESSION['user'] . ", let's play again!</p><a href = 'index.php'>Start over</a>";

                    // Unset and destroy the session
                    session_unset();
                    session_destroy();

                } elseif($_POST['SecondTopFruit'] == 'no'){
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
    </body>
</html>
