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
                    "question" => "The lead singer of the band “Queen",
                    "answer" => "Who is Freddie Mercury?",
                ),
                array(
                    "question" => "The band that released the song “Hey there Delilah",
                    "answer" => "Who are the Plain White T's?",
                ),
                array(
                    "question" => "The musician that won the Nobel Prize for Literature in 2016",
                    "answer" => "Who is Bob Dylan?",
                ),
                array(
                    "question" => "“Hallelujah” is a song written by which Canadian recording artist",
                    "answer" => "Who is Leonard Cohen?",
                ),
                array(
                    "question" => "The famous singer that died of alcohol poisoning in 2011 at the age of 27",
                    "answer" => "Who is Amy Winehouse?",
                ),
            );
            echo "<p style='text-align: center; font-size: 300%;'>" . $qna_array[rand(0, 4)]["question"] . "</p>";
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