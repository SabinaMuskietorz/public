<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['submit'])) {
	$stmt = $pdo->prepare('INSERT INTO game(idgame, name, idplatform)
						   VALUES ( :idgame, :name, :idplatform)');
    $stmt = $pdo->prepare('SELECT * FROM platform');

	unset($_POST['submit']);
	$stmt->execute($_POST);

	echo 'Record Added';

    echo '<p><a href="indexgame.php">Back to list</a>';
    echo '<select name="platform">';
    foreach ($stmt as $platform) {
        echo '<option value="' . $platform['idplatform'] . '">' . $platform['name'] .'</option>';
    }
}
echo '</select>';
else {
	?>

	<form acction="addgame.php" method="post">
		<label>Game id</label>
		<input type="text"  name="idgame" />
		<label>Name</label>
        <input type="text"  name="name" />
        <label>Platform Id</label>
		<input type="text"  name="idplatform" />
		<input type="submit" value="submit" name="submit" />
	</form>
	<?php
}
?>