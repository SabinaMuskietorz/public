<?php 
$myArray = [];

$myArray[0] = 'Zero';
$myArray[1] = 'One';
$myArray[2] = 'Two';
$myArray[3] = 'Three';
$myArray[4] = 'Four';
$myArray[5] = 'Five';
$myArray[6] = 'Six';
$myArray[7] = 'Seven';
$myArray[8] = 'Eight';
$myArray[9] = 'Nine';

echo '<ul>';
for ($i = 0, $i < count($myArray); $i++) {
       echo '<li>' . $myArray[$i] . '</li>';
}
echo '</ul>';
?>