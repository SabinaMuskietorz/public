<?php

if (!isset($_GET['choice'])) {
    echo '<ul>';
    echo '<li><a href="rps.php?choice=rock">Rock</a></li>';
    echo '<li><a href="rps.php?choice=paper">Paper</a></li>';
    echo '<li><a href="rps.php?choice=scissors">Scissors</a></li>';
    echo '</ul>';
}
else {
    $computerChoices = ['rock', 'paper', 'scissors'];
    $randChoice = rand(0, 2);

    //random computer choice
    $computer = $computerChoices[$randChoice];
    $player = $_GET['choice'];

    if ($computer == $player) {
        echo 'Draw! Both players chose ' . $player;
    }
    else {
        echo 'You chose ' . $player . ' and the computer chose ' . $computer . '.';

        if ($computer == 'rock' && $player == 'scissors') {
            echo 'Computer wins!';
        }
        else if ($computer == 'rock' && $player == 'paper') {
            echo = 'You win';
        }
        else if ($computer == 'paper' && $player == 'rock') {
            echo = 'Computer wins';
        } 
        else if ($computer == 'paper' && $player == 'scissors') {
            echo = 'You win';
        }
        else if ($computer == 'scissors' && $player == 'paper') {
            echo = 'Computer wins';
        }
        else if ($computer == 'scissors' && $player == 'rock') {
            echo = 'You win';
        }
    }
}