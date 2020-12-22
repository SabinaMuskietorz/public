<?php
session_start();
unset($_SESSION['loggedin']);
echo 'You are now logged out
<a href="logincheck.php">Go to
logincheck.php</a>';
