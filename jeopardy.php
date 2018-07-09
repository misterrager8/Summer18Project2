<?php
    session_start();
    $_SESSION["team1_score"] = 0;
    $_SESSION["team2_score"] = 0;
    $_SESSION["team3_score"] = 0;
    $_SESSION["team4_score"] = 0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Welcome To Jeopardy!</title>
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="jeopardy.css"/>
    </head>
    <body>
        <form action="" method="post">
            Number Of Teams:
            <select name="numTeams">
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
            </select>
            <input type = "submit" name = "button">
        </form>
        <table>
            <tr>
                <th>Movies</th>
                <th>TV</th>
                <th>Literature</th>
                <th>Music</th>
                <th>Politics</th>
                <th>Tech</th>
            </tr>
            <tr>
                <td><a href = "questions/movies_page.php">200</a></td>
                <td><a href = "questions/tv_page.php">200</a></td>
                <td><a href = "questions/lit_page.php">200</a></td>
                <td><a href = "questions/music_page.php">200</a></td>
                <td><a href = "questions/polit_page.php">200</a></td>
                <td><a href = "questions/tech_page.php">200</a></td>
            </tr>
            <tr>
                <td><a href = "questions/movies_page.php">400</a></td>
                <td><a href = "questions/tv_page.php">400</a></td>
                <td><a href = "questions/lit_page.php">400</a></td>
                <td><a href = "questions/music_page.php">400</a></td>
                <td><a href = "questions/polit_page.php">400</a></td>
                <td><a href = "questions/tech_page.php">400</a></td>
            </tr>
            <tr>
                <td><a href = "questions/movies_page.php">600</a></td>
                <td><a href = "questions/tv_page.php">600</a></td>
                <td><a href = "questions/lit_page.php">600</a></td>
                <td><a href = "questions/music_page.php">600</a></td>
                <td><a href = "questions/polit_page.php">600</a></td>
                <td><a href = "questions/tech_page.php">600</a></td>
            </tr>
            <tr>
                <td><a href = "questions/movies_page.php">800</a></td>
                <td><a href = "questions/tv_page.php">800</a></td>
                <td><a href = "questions/lit_page.php">800</a></td>
                <td><a href = "questions/music_page.php">800</a></td>
                <td><a href = "questions/polit_page.php">800</a></td>
                <td><a href = "questions/tech_page.php">800</a></td>
            </tr>
            <tr>
                <td><a href = "questions/movies_page.php">1000</a></td>
                <td><a href = "questions/tv_page.php">1000</a></td>
                <td><a href = "questions/lit_page.php">1000</a></td>
                <td><a href = "questions/music_page.php">1000</a></td>
                <td><a href = "questions/polit_page.php">1000</a></td>
                <td><a href = "questions/tech_page.php">1000</a></td>
            </tr>
        </table>
        <br>
        <a href="leaderboard.php">Leaderboard</a>
    </body>
</html>