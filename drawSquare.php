<link rel="stylesheet" href="drawSquare.css" />

<?php
function drawSquare() {
    $num = rand(1, 10);
    echo 'div class="square' . $num . '"></div>';
}

for ($i = 0; $i < 10; $i++) {
     drawSquare();
}
?>