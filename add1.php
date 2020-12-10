<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);



$stmt = $pdo->prepare('INSERT INTO message (email, firstname, surname, date, message)
                                        VALUES (:email, :firstname, :surname, :date, :message)');
$date = date('Y-m-d H:i:s');

$values = [
    'firstname' => 'John',
    'surname' => 'Smith',
    'email' => 'john@example.org',
    'date' => $date,
    'message' => 'I posted a message!'
];
$stmt->execute($values);

$values = [
    'firstname' => 'Sue',
    'surname' => 'Evans',
    'email' => 'sue@example.org',
    'date' => $date,
    'message' => 'I posted a message!'
];
$stmt->execute($values);

$values = [
    'firstname' => 'John',
    'surname' => 'Smith',
    'email' => 'john@example.org',
    'date' => $date,
    'message' => 'I posted another message!'
];
$stmt->execute($values);
?>