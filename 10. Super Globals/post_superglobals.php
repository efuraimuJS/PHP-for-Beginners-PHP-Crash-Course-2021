<?php
/*server, request, post, get, sessions, cookies*/
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    echo '<br>';
    print("$username");
    echo '<br>';
    print("$email");
    echo '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="superglobals.php" method="post">username: <input type="text" name="username">
        <br>
        email: <input type="text" name="email">
        <br>
        <input type="submit" name="submit">
    </form>

</body>

</html>