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
    for ($x = 0; $x <= 1000; $x++)
        for ($y = 0; $y <= 1000; $y++)
            for ($z = 0; $z <= 1000; $z++)
                if ($x + $y + $z == 1000)
                    echo "$x + $y + $z = 1000 <br>"
    ?>
</body>

</html>