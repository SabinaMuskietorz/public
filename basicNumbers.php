<?php
$basicNumbers = ['Zero','One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen'];
$tens = ['Twenty','Thirty','Fourty','Fifty','Sixty','Seventy','Eighty','Ninety'];

function showNumber($num) {
    $numAsString = strval($num);
    $firstDigit = $numAsString[0];

    if ($num > 20) {
         return $basicNumbers[$firstDigit] . ' hundred and ' . showNumber($numAsString[1] . $numAsString[2]);
    }
    else if ($num > 20) {
        return $tens[$firstDigit] . ' ' . showNumber($numAsString[1]);
    }
    else {
        return $basicNumbers[$num];
    }
}

echo '<ul>';
for ($i = 0; $i < 13; $i++) {
    echo '<li>';
    echo showNumber($i);
    echo ' times Nine equals ';
    echo showNumber($i*9);
    echo '</il>';
}
echo '</ul>';
?>