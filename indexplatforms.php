<a href="addplatform.php">Add new platform</a>
<?php

 $server = 'v.je';
 $username = 'student';
 $password = 'student';

 //The name of the schema we created earlier in MySQL workbench//If this schema does not exist you will get an error!

 $schema = 'CSY2028';
 $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// If the form is submitted, search the database
if (isset($_POST['submit'])) {

	if ($_POST['field'] == 'idplatform' || $_POST['field'] == 'name') {
		$stmt = $pdo->prepare('SELECT * FROM platform);



	}
}
//Otherwise, list all the records
else {
	$stmt = $pdo->prepare('SELECT * FROM person');
	$stmt->execute();
}
?>

	<form action="index1.php" method="POST">

		<label>Search</label>
		<input type="text" name="search" />

		<label>Field</label>
		<select name="field">
			<option value="firstname">First name</option>
			<option value="surname">Surname</option>
			<option value="email">Email Address</option>
		</select>

		<input type="submit" name="submit" value="Search" />

	</form>

	<?php


echo '<ul>';
foreach ($stmt as $row) {
	echo '<li>';
	echo $row['firstname'] . ' ' . $row['surname'] . ' has the email address ' . $row['email'];
	echo ' <a href="edit.php?email=' . $row['email'] . '">Edit</a> ';
	echo ' <a href="delete.php?email=' . $row['email'] . '">Delete</a>';
	echo '</li>';
}
echo '</ul>';
?>
