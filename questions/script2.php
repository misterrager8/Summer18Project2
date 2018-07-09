<?php
    session_start();
    $_SESSION['team2_score'] += 200;
    print_r($_SESSION);
?>