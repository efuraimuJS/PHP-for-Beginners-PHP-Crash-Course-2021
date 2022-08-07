<?php

if (isset($_GET['authentication'])) {
    $get = $_GET['authentication'];
    print("$get");
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
    <a href="get_superglobals.php?authentication=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoiMDFHOVRLSlAxUEpNNVFGM0ZYMFMwOVhFRDMifQ.IuXOIe-2ssR8YRVxUyCKuldpyTf7x_Zhz03YdtBZtzU">GET LINK</a>
</body>

</html>