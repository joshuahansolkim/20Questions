<?php
session_start();
?>

<html>
    <head>
        <title>20 Questions</title>
    </head>
    <body>

        <?php
            // Unset session, just to make sure that we are starting a new session, in case they come back to this page without completing the game
            session_unset();

            // Create variable to access MySQL database
            $servername = "localhost";
            $username = "mikagere_read";
            $password = "zIFVeu2p2Ohy";
            $dbname = "mikagere_20Qs";

            // Create connection to database
            $conn = new mysqli($servername, $username, $password, $dbname);

            // If there is a connection error show error message
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

                // Create new array in session variable with key "Questions"
            $_SESSION['Questions'][] = array();

            // Get questions from the database
            $QuestionsResult = $conn->query("SELECT * FROM Questions");

            // Check to make sure that there is data in the database table
            if($QuestionsResult->num_rows > 0){
            // If there is data, iterate through the data from the database and put it into the php array
                while($row = $QuestionsResult->fetch_assoc()){
                    $_SESSION['Questions'][] = $row;
                }
            } else {
            // Show error message if there is no data
                echo "There are no questions";
            }

            // I don't think this needs to be here until the results are calculated
            // Create new array in session variable with key "Fruit"
            $_SESSION['Fruit'][] = array();

            // Get fruit from database
            $FruitResult = $conn->query("SELECT * FROM Fruit");

            // Check to make sure that there is data in the database table
            if($FruitResult->num_rows > 0){
                // If there is data, iterate through the data from the database and put it into the php array
                while($row = $FruitResult->fetch_assoc()){
                    $row['Used'] = 0;
                    $_SESSION['Fruit'][] = $row;
                }
            } else {
                //Show error message if there is no data
                echo "0 results";
            }

            // I think this part should actually be in the last page when results are calculated
            // Create new array in session variable with key "TempFruitTable"
            $_SESSION['TempFruitTable'][] = array();

            // Get temporary fruit from database
            $QuestionsResult = $conn->query("SELECT * FROM TemporaryFruit");

            // Check to make sure that there is data in the database table
            if($QuestionsResult->num_rows > 0){
            // If there is data, iterate through the data from the database and put it into the php array
                while($row = $QuestionsResult->fetch_assoc()){
                    $_SESSION['TempFruitTable'][] = $row;
                }
            }

            echo($_SESSION['TempFruitTable']);
            echo($_SESSION['Fruit']);

            array_shift($_SESSION['TempFruitTable']);
            array_shift($_SESSION['Fruit']);

            // Count how many fruit there are in the array
            $_SESSION['NumberFruits'] = count($_SESSION['Fruit'],0);
            $_SESSION['NumberQuestions'] = count($_SESSION['Questions'],0)-1;
            // Iterate through the fruit making all the scores 0
            for($i=0;$i<=$_SESSION['NumberFruits'];$i++){
                $_SESSION['Fruit'][$i]['score'] = 0;
            }

            // Create a new variable to hold which question number is being asked
            $_SESSION['QuestionNumber'] = 0;

            $_SESSION['TemporaryFruit'];

            // Close the connection to the database
            $conn->close();
        ?>

        <!-- Print a form for the user to input their name, the form will move to the first question upon submit -->
        <!-- CONTENT -->

        <div class="shortcodes left">
            <p>This game was a class project for Software Engineering at Andrews University.
            The assignment was to create a requirements document for a program that would ask 20 questions about an object in a specific
            category and then try to guess what the object was. My category of choice was fruits and vegetables.
            I wrote the program using php and a mysql database.
            </p>

            <p>This project is not completed yet. I currently only have a few fruit in the database,
            however I am working on adding functionality to let people add more fruit as they beat the program.
            There is currently an issue with the scoring at the end and it may guess a wrong fruit even though the fruit you were thinking of is in
            the database.
            </p>
            <hr>
            <h5>Instructions</h5>
            <ul>
                <li>Don't go back ~ If you answer a question incorrectly just keep going. Going back will give you an error message.</li>
                <li>Answer each question ~ The program is made to ask you a question again if you did not answer it, so you can't get anywhere unless you answer the questions.</li>
                <li>Have fun.</li>
            </ul>
            <hr>
            <form name="form1" method="post" action="questions1.php">
                Name: <input type="text" name="name"><br><br>
                <input type="Submit" name="Submit1" VALUE="Submit">
            </form>
        </div>
    </body>
</html>
