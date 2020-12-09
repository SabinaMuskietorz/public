<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$stmt = $pdo->prepare('DELETE FROM person WHERE email = :email');

$values = [
	'email' => $_GET['email']
];
$stmt->execute($values);

echo '<p>Record deleted</p>';
echo '<p><a href="index1.php">Back to list</a>';
