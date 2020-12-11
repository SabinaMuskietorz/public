<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO platform(idplatform, name)
						   VALUES ( :idplatform, :name)');


	unset($_POST['submit']);
	$stmt->execute($_POST);

	echo 'Record Added';

	echo '<p><a href="indexplatform.php">Back to list</a>';
}
else {
	?>

	<form acction="addplatform.php" method="post">
		<label>Platform Id</label>
		<input type="text"  name="idplatform" />
		<label>Name</label>
		<input type="text"  name="name" />
		<input type="submit" value="submit" name="submit" />
	</form>
	<?php
}
?>