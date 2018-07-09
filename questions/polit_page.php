<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Question</title>
        <link rel="stylesheet" type="text/css" href="quest_page.css"/>
    </head>
    <body>
        <?php 
            $qna_array = array(
                array(
                    "question" => "The number of presidents involved in the Vietnam war",
                    "answer" => "How much is 5?",
                ),
                array(
                    "question" => "The US politician that coined the term 'Lunatic fringe'",
                    "answer" => "Who is Teddy Roosevelt?",
                ),
                array(
                    "question" => "The only presidential candidate besides George Washington to run unopposed",
                    "answer" => "Who is James Monroe?",
                ),
                array(
                    "question" => "Zionism got its name from the hill in Jerusalem boasting this Temple",
                    "answer" => "What is the Temple of Solomon?",
                ),
                array(
                    "question" => "The Pope John Paul II in the 1980s supported this Polish political movement",
                    "answer" => "What is Solidarity?",
                ),
            );
            $picked = $qna_array[rand(0, 4)];
            echo "<p style='text-align: center; font-size: 300%;'>" . $picked["question"] . "</p>";
            echo "<p style = 'color: cornflowerblue; text-align: center; font-size: 300%;'>", $picked["answer"], "</p>"
        ?>
        <div style="display: block; margin: auto;">
            <form action="script.php" method="get">
              <input type="submit" value="Team 1">
            </form>
            <form action="script2.php" method="get">
              <input type="submit" value="Team 2">
            </form>
            <form action="script3.php" method="get">
              <input type="submit" value="Team 3">
            </form>
            <form action="script4.php" method="get">
              <input type="submit" value="Team 4">
            </form>
        </div>
    </body>
</html>