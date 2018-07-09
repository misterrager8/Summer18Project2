<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Leaderboard</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="submit" value="Leaderboard">
        </form>
        <?php
            session_start();
            echo "<p>Team 1 Score: ",$_SESSION['team1_score'],"</p>";
            echo "<p>Team 2 Score: ",$_SESSION['team2_score'],"</p>";
            echo "<p>Team 3 Score: ",$_SESSION['team3_score'],"</p>";
            echo "<p>Team 4 Score: ",$_SESSION['team4_score'],"</p>";
        ?>
    </body>
</html>