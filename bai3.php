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
    function ktNT($n)
    {
        $dem = 0;
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $dem++;
            }
        }
        if ($dem > 0)
            return 0;
        else return 1;
    }
    $n = rand(-100, 100);
    echo "Số n là : $n<br>";
    if ($n > 0) {
        echo "Ước của n là";
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0)
                echo "<br> $i";
        }
    } else {
        echo "n là số âm";
    }
    ?>
</body>

</html>