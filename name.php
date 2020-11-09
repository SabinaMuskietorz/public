<?php 

if (isset($_GET['name'])) {
    echo 'Hello' .' '. $_GET['name'];
}
else {
    ?>
    <form action="name.php" method="GET">
    What is your name?
    <input type="text" name="name" />
    <input type="submit" value="Submit" name="submit" />
    </form>

    <?php
}
?>