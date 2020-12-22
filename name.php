<?php
session_start();
if (isset($_POST['submit'])) {
 $_SESSION['name'] = $_POST['name']
 echo '<a href=”welcome.php”>Go to welcome.php</p>';
}
//The submit button was not pressed, show the log-in form
else {
?>
<form action="login.php" method="POST">
 <label>Enter your name: </label>
 <input type="text" name="name" />
 <input type="submit" name="submit" value="Submit" />
</form>
<?php
}