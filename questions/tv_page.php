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
                    "question" => "Popular 1990s TV series that ran from 1994-2004 and featured characters named Rachel, Monica, Phoebe, Joey, Chandler, and Ross",
                    "answer" => "What is Friends?",
                ),
                array(
                    "question" => "Cartoon television show based on the Griffin family that became popular in the early 2000s",
                    "answer" => "What is Family Guy?",
                ),
                array(
                    "question" => "Popular 1990s TV show 'The Fresh Prince of Bel-Air' featured which superstar actor and rapper at the beginning of his career",
                    "answer" => "Who is Will Smith",
                ),
                array(
                    "question" => "What the acronym “OWN”, the cable television channel, stands for",
                    "answer" => "What is Oprah Winfrey Network?",
                ),
                array(
                    "question" => "Plays the character Dexter on the show 'Dexter'",
                    "answer" => "Who is Michael C. Hall?",
                ),
                array(
                    "question" => "The type of dog Scoopy Doo is ",
                    "answer" => "What is a great dane?",
                )
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