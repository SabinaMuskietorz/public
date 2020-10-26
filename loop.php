<?php
echo '<ul>';
for ($i = $_GET['start']; $i < $_GET['end']; $i++) {
    echo '<li>' . $i . '</li>';
}
echo '</ul>';

?>