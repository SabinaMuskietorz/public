<?php
$num = rand(1,6);
$num2 = rand(1,6);
if ($num ==6) {
echo 'You rolled a 6. You win!';
}
else {
    echo 'You rolled a ';
    echo $num;
    echo ', you lose';
}
echo '<a href="dicegame.php">Roll again</a>';
?>