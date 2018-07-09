<?php
    session_start();
    $_SESSION["numCat"] = 0;
    $_SESSION["perCat"] = 0;
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
            Number Of Categories:
            <select name="numCat">
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
                <option value = "5">5</option>
                <option value = "6">6</option>
            </select>
            Questions Per Category:
            <select name="perCat">
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
                <option value = "5">5</option>
            </select>
            <input type = "submit" name = "button">
            <a href="#" style="float:right; color:orange;">Leaderboard</a>
        </form>
        <?php
            function make_table($perCat, $numCat) {
                $categories = array("Movies", "TV", "Literature", "Music", "Politics", "Web");
                echo "<table><tr>";
                for($x = 0; $x < $numCat; $x++){
                    echo "<th>" . $categories[$x] . "</th>";
                }
                echo "</tr>";
                for ($i = 1; $i <= $perCat; $i++){
                    echo "<tr>";
                    for ($j = 1; $j <= $numCat; $j++){
                        echo "<td><a href = 'quest_page.php'>$", $i * 200, "</a></td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            make_table($_POST["perCat"], $_POST["numCat"]);
        ?>
    </body>
</html>