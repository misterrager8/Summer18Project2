<?php
    session_start();
    include 'jeopardy.php';
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
                    "question" => "The author of Les Miserable",
                    "answer" => "Who is Victor Hugo?",
                ),
                array(
                    "question" => "The book Humpty Dumpty first appears in",
                    "answer" => "What is Through The Looking Glass?",
                ),
                array(
                    "question" => "The author of Breakfast at Tiffany’s",
                    "answer" => "Who is Truman Capote?",
                ),
                array(
                    "question" => "What the JK means in J K Rowling, the author of the Harry Potter series",
                    "answer" => "What is Joanne Kathleen?",
                ),
                array(
                    "question" => "The author of Dick Tracy",
                    "answer" => "Who is Chester Gould?",
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