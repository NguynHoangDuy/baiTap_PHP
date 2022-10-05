<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_POST['password'] != $_POST['Confirm-password'])
        echo "Incorrect Confirm Password";
    else {
        echo "Thanks", $_POST['name'];
        echo "! please cornfirm registration in your email: ", $_POST['email'];
    }
    ?>
</body>

</html>