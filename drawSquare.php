<link rel="stylesheet" href="style.css" />

<?phpfunction drawSquare() {
    $num = rand(!, 10);
    echo 'div class="square' . $num . '"></div>';
}

for ($i = 0; $i < 10; $i++) {
     drawSquare();
}
?>