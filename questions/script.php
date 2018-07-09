<?php
    session_start();
    if (isset($_POST["two_hund"])) {
        $_SESSION['team1_score'] += 200;
    }else{
        $_SESSION['team1_score'] += 200;
    }
    print_r($_SESSION);
?>