<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
//The name of the schema we created earlier in MySQL workbench
//If this schema does not exist you will get an error!
$schema = 'CSY2028';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO person ( firstname, surname, email)
                                           VALUES (:firstname, :surname, :email)');

$values = [
         'firstname' => $_POST['firstname'],
         'surname' => $_POST['surname'],
         'email' => $_POST['email']
         ];
$stmt->execute($values);                                                   
}
else {
?>
<form acction="add.php" method="POST">
		<label>First name:</label>
		<input type="text"  name="firstname" />
		<label>Surname:</label>
		<input type="text"  name="surname" />
		<label>Email:</label>
		<input type="text"  name="email" />
		<input type="submit" value="Submit" name="submit" />
        
	</form>
<?php
}
?>







