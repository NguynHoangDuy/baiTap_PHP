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

    function countWord($string)
    {  
        $dem = 1;
        $string = trim($string);
        for($i = 0; $i < strlen($string); $i++)
        {
            if($string[$i] == " " && $string[$i+1] != " ")
            $dem++;
        }
        return $dem;
    }

    echo countWord("Đại học   Nha   Trang");
    ?>
</body>
</html>