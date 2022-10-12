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
        if(isset($_POST["sub"]))
        {
            $n = $_POST["n"];
        }
           
    ?>
    <form action="" method="post">
        <table align="center">
           <tr>
                <td>Nhập n:</td>
                <td><input type="text" name="n" value="<?php if(isset($_POST["n"])) if(isset($_POST["reset"])) echo ""; else echo $n;?>" required></td>
           </tr>
           <tr>
                <td></td>
                <td><button type="submit" name="sub">Thực hiện</button>
                <button type="submit" name="reset">Reset</button></td>
           </tr> 
        </table>
    </form>

    <?php
        if(isset($_POST["sub"]))
        {
            if(isset($n))
            {
                if($n > 0 )
                {
                    $arr = [];
                    for($i = 0; $i < $n; $i++){
                        $arr[$i] = rand(-5, 10);
                    }
                    for($i = 0; $i < $n; $i++){
                        echo "$arr[$i] ";
                    }
                    echo "<br>Số Chẵn: ";
                    echo countChan($arr, $n);
                    echo "<br>Số lẻ: ";
                    echo countLess100($arr, $n);
                    echo "<br>Tổng số âm: ";
                    echo sumAm($arr, $n);
                    echo "<br>Vị trí số âm: ";
                    vtZero($arr, $n);
                    sortAZ($arr, $n);
                    echo " <br> Đã sắp xếp:";
                    for($i = 0; $i < $n; $i++){
                        echo "$arr[$i] ";
                    }
                }
            }
        }

        function countChan($arr, $n){
            $dem= 0;
            for($i = 0; $i < $n; $i++)
            {
                if($arr[$i] % 2 == 0 && $arr[$i] != 0)
                {
                    $dem++;
                }
            }
            return $dem;
        }
        function countLess100($arr, $n){
            $dem= 0;
            for($i = 0; $i < $n; $i++)
            {
                if($arr[$i] < 100)
                {
                    $dem++;
                }
            }
            return $dem;
        }

        function sumAm($arr, $n){
            $sum= 0;
            for($i = 0; $i < $n; $i++)
            {
                if($arr[$i] < 0)
                {
                    $sum = $sum + $arr[$i];
                }
            }
            return $sum;
        }

        function vtZero($arr, $n){
            $dem = 0;
            for($i = 0; $i < $n; $i++)
            {
                if($arr[$i] == 0)
                {
                    $dem++;
                    echo "$i ";
                }
            }
            if($dem == 0)
            {
                echo "Không có số 0";
            }
        }
        function swap(&$i, &$j)
        {
            $tam = $i;
            $i = $j;
            $j = $tam;
        }
        function sortAZ(&$arr, $n){
            for($i = 0; $i < $n; $i++)
            {
                for($j = $i+1; $j < $n; $j++)
                {
                    if ($arr[$j] < $arr[$i])
                    swap($arr[$i], $arr[$j]);
                }
            }
        }
    ?>
</body>
</html>