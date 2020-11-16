<?php
$valid = false;

if(isset($_POST['submit'])) {
    $valid = true;

    $nonempty = ['firstname', 'surname', 'color', 'email', 'address'];

    foreach ($nonempty as $field) {
        if ($_POST[$field] == '') {
            $valid = false;
            echo '<p>Please enter your ' . $field . '</p>';
        }
    }
    if (!isset($_POST['terms'])) {
        $valid = false;
        echo '<p>You must accept the terms and conditions</p>';
    }
    if (!filter_var($_POST['email'], FILTER_EMAIL)) {
        $valid = false;
        echo '<p>You must enter a valid email address</p>';
    }
}
if ($valid == true) {
    echo '<p>First name: ' . $_POST['firstname'] . '</p>';
    echo '<p>Surname: ' . $_POST['surname'] . '</p>';
    echo '<p>Email: ' . $_POST['email'] . '</p>';
    echo '<p>Favourite colour: ' . $_POST['colour'] . '</p>';
    echo '<p>Address: ' . $_POST['address'] . '</p>';
}
else {
    ?>
    <form action="signup.php" method="POST">
    <label for="firstname">First name</label>
    <input type="text" name="firstname"
    value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" />

    <label for="surname">Surname</label>
    <input type="text" name="surname"
    value="<?php if (isset($_POST['surname'])) echo $_POST['surname']; ?>" />

    <label for="email">Email address</label>
    <input type="text" name="email"
    value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />

    <label for="colour">Favourite colour?</label>
    <select name="colour">
    <option
    <?php
    if (isset($_POST['colour']) && $_POST['colour'] == 'Red') echo 'selected="selected"';
    ?> value="Red">Red</option>
    <option
    <?php
    if (isset($_POST['colour']) && $_POST['colour'] == 'Yellow') echo 'selected="selected"';
    ?> value="Yellow">Yellow</option>
    <option
    <?php
    if (isset($_POST['colour']) && $_POST['colour'] == 'Green') echo 'selected="selected"';
    ?> value="Green">Green</option>
    <option
    <?php
    if (isset($_POST['colour']) && $_POST['colour'] == 'Blue') echo 'selected="selected"';
    ?> value="Blue">Blue</option>
    </select>

    <label for="address">Address</label>
    <textarea name="address">
    <?php if (isset($_POST['address'])) echo $_POST['address']; ?>
    </textarea>

    <label for="terms">Do you accept the terms and conditions?</label>
    <input type="checkbox" name="Checkbox" value="yes" />

    <input type="submit" name="Submit" value="submit" />
    </form>
    <?php
}
?>