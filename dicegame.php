<?php
$num = rand(1,6);
$num2 = rand(1,6);
if ($num ==6) {
echo 'You rolled six.You win!';
}
else {
    echo 'You rolled a';
    echo $num;
    echo ', you lose';
}
echo '<ahref="dice_game.php">Roll again</a>';
?>