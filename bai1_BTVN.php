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
    $string = "Nguyễn Hoàng Duy";
    echo "Chuỗi chưa xóa: $string <br>";

    function removeChar(&$string, $vt)
    {
        $newString = "";
        $dem = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            if ($vt != $i) {
                $newString[$dem] = $string[$i];
                $dem++;
            }
        }
        $string = $newString;
        return $string;
    }

    removeChar($string, 0);
    echo "Chuỗi đã xóa: $string"
    ?>
</body>

</html>