<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO person(firstname, surname, email)
						   VALUES ( :firstname, :surname, :email)');


	unset($_POST['submit']);
	$stmt->execute($_POST);

	echo 'Record Added';

	echo '<p><a href="index.php">Back to list</a>';
}
else {
	?>

	<form acction="add.php" method="post">
		<label>First name</label>
		<input type="text"  name="firstname" />
		<label>Surname</label>
		<input type="text"  name="surname" />
		<label>Email address</label>
		<input type="text"  name="email" />
		<input type="submit" value="submit" name="submit" />
	</form>
	<?php
}