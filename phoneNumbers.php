<?php
$phoneNumbers = [];
$phoneNumbers['John'] = '389';
$phoneNumbers['Kate'] = '012';
$phoneNumbers['Sue'] = '586';
$phoneNumbers['Dave'] = '675';
$phoneNumbers['Jo'] = '464';

if (isset($_GET['name'])) {
    echo $_GET['name'] . ' is on extension number ' . $phoneNumbers[$_GET['name']];
}
else {
    echo '<ul>';
    foreach ($phoneNumbers as $name => $number) {
        echo '<li><a href="phone.php?name=' . $name . '">' . $name . '</a></li>';
    }
    echo '</ul>';
}

