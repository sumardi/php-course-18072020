<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Customer Feedback</h1>

    <?php include_once('my_function.php') ?>
    <?php include_once('database.php') ?>
    <?php
    if (isset($_POST) && count($_POST) > 0) {
        $sql = sprintf("INSERT INTO feedback(name, email, feedback)VALUES('%s', '%s', '%s')", $_POST['name'], $_POST['email'], $_POST['feedback']);
        if (mysqli_query($conn, $sql)) {
            echo 'Data saved succesfully.';
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php echo html_inputtext('name', 'Name :'); ?>
        <p></p>
        <?php echo html_inputtext('email', 'Email :') ?>
        <p></p>
        <?php echo html_textarea('feedback', 'Feedback :') ?>
        <button type="submit">Submit</button>
    </form>
</body>

</html>