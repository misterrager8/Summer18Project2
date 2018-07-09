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
                    "question" => "Color of the slippers in the original Wizard of Oz",
                    "answer" => "What is silver?",
                ),
                array(
                    "question" => "The first movie given the title 'Blockbuster'",
                    "answer" => "What is Jaws?",
                ),
                array(
                    "question" => "In Walt Disney’s Sleeping Beauty, the name of the Queen witch",
                    "answer" => "Who is Maleficent",
                ),
                array(
                    "question" => "Marilyn Monroe’s real last name",
                    "answer" => "Who is Mortenson?",
                ),
                array(
                    "question" => "Actor that appeared in American Graffiti before starring in Star Wars",
                    "answer" => "Who is Harrison Ford?",
                ),
                array(
                    "question" => "Year the original 'Jurassic Park' film was released",
                    "answer" => "When is 1993?",
                )
            );
            echo "<p style='text-align: center; font-size: 300%;'>" . $qna_array[rand(0, 4)]["question"] . "</p>";
        ?>
        <div style="display: block; margin: auto;">
            <form action="script.php" method="get" name="two_hund">
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