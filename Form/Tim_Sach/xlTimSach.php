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
    if ($_GET['bookName'] == "") {
        header('Location: timsach.html');
    } else
        echo "Từ khóa cần tìm là: ", $_GET['bookName'];
    ?>
</body>

</html>