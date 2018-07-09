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
                    "question" => "A question that needs an answer",
                    "answer" => "peterparker@mail.com",
                ),
                array(
                    "question" => "A question that needs an answer2",
                    "answer" => "clarkkent@mail.com",
                ),
                array(
                    "question" => "A question that needs an answer3",
                    "answer" => "harrypotter@mail.com",
                ),
                array(
                    "question" => "A question that needs an answer4",
                    "answer" => "clarkkent@mail.com",
                ),
                array(
                    "question" => "A question that needs an answer5",
                    "answer" => "clarkkent@mail.com",
                ),
                array(
                    "question" => "A question that needs an answer6",
                    "answer" => "clarkkent@mail.com",
                ),
                
            );
            echo "<p style='text-align: center; font-size: 300%;'>" . $qna_array[rand(0, 5)]["question"] . "</p>";
        ?>
        <div class="buttons" style="text-align: center;">
            <input type="button" value="Team/Player 1">
            <input type="button" value="Team/Player 2">
            <input type="button" value="Team/Player 3">
            <input type="button" value="Team/Player 4">
            <br>
            <br>
            <input type="button" value="Show Answer">
            <br>
            <br>
            <input type="button" value="Go Back">
        </div>
    </body>
</html>