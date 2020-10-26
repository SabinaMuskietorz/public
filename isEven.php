<?php
function isEven($num) {
    if ($num % 2 == 0) {
        return true;
    }
    else {
        return false;
    }
}

if (isEven($_GET['num'])) {
    echo $_GET['num'] . ' is an even number';
}
else {
    echo $_GET['num'] . ' is not an even number';
}
?>