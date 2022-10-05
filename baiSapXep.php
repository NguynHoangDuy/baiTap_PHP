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
    $a = [];
    function swap(&$i, &$j)
    {
        $tam = $i;
        $i = $j;
        $j = $tam;
    }
    for ($i = 0; $i < 15; $i++) {
        $a[$i] = rand(-100, 100);
    }
    function sortFunc(&$arr)
    {
        for ($i = 0; $i < 15; $i++)
            for ($j = $i + 1; $j < 15; $j++) {
                if ($arr[$j] < $arr[$i])
                    swap($arr[$i], $arr[$j]);
            }
    }
    echo "Chưa sắp xếp";
    for ($i = 0; $i < 15; $i++) {
        echo "$a[$i] ";
    }
    echo "<br>";
    sortFunc($a);
    echo "Đã sắp xếp:";
    for ($i = 0; $i < 15; $i++) {
        echo "$a[$i] ";
    }

    ?>
</body>

</html>