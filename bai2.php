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
    echo "<table border= '1'>";
    echo "<tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<th> Chương $x </th>";
    }
    echo "</tr>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= 10; $y++) {
            $kq = $x * $y;
            echo "<td> $x * $y = $kq </td>";
        }
        echo "</tr>";
    }
    echo "</table>"
    ?>
</body>

</html>