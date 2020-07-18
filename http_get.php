<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    Enter your name<br />
    <input type="text" name="a">
    <button type="submit">Submit</button>
</form>

<?php

if (isset($_GET['a'])) {
    echo 'Hello, ' . $_GET['a'] . '!';
}
