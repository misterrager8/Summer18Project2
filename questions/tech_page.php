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
                    "question" => "The year the Apple iPhone became available",
                    "answer" => "When was 2007?",
                ),
                array(
                    "question" => "Firefox, Opera, Chrome, Safari are types of this",
                    "answer" => "What is a Web browser?",
                ),
                array(
                    "question" => "What WWW stands for",
                    "answer" => "What is the World Wide Web?",
                ),
                array(
                    "question" => "What did the original Sony Playstation use",
                    "answer" => "What are CD's ?",
                ),
                array(
                    "question" => "In terms of computing, what ROM stands for",
                    "answer" => "What is Random Only Memory?",
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