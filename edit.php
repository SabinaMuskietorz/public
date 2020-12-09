<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('UPDATE person SET
								firstname = :firstname,
								surname = :surname,
								email = :email
							WHERE email = :oldemail
						');



	unset($_POST['submit']);
	$stmt->execute($_POST);


	echo '<p>Record Updated</p>';

	echo '<p><a href="index.php">Back to list</a>';
}
else {
		$stmt = $pdo->prepare('SELECT * FROM person WHERE email = :email');

	$values = [
		'email' => $_GET['email']
	];

	$stmt->execute($values);

	$person = $stmt->fetch();

?>

	<form acction="add.php" method="post">
		<label>First name</label>
		<input type="text"  name="firstname" value="<?php echo $person['firstname'];?>"/>
		<label>Surname</label>
		<input type="text"  name="surname" value="<?php echo $person['surname'];?>" />
		<label>Email address</label>
		<input type="text"  name="email"  value="<?php echo $person['email'];?>" />

		<input type="hidden"  name="oldemail"  value="<?php echo $person['email'];?>" />
		<input type="submit" value="submit" name="submit" />
	</form>
<?php
}
?>