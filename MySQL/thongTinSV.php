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
        if(isset($_POST["gui"]))
        {
            $ten = $_POST["ten"];
            $ho = $_POST["ho"];
            $diaChi = $_POST["diaChi"];
            $lop = $_POST["lop"];
            include("./conection.php");
            if(!$conn){
                die("Connection failed: ". mysqli_connect_error());
            }
            else {
                $queryInsert = "INSERT INTO `sinh_vien`(`ten`, `ho`, `diaChi`, `lop`) VALUES ('$ten','$ho','$diaChi', '$lop')" ;
                $result = mysqli_query($conn, $queryInsert);
                if(!$result)
                $kq = "Thêm không thành công";
                else $kq ="Thêm thành công";
            }
        }

        if(isset($_POST['xem']))
        {
            header('location: ./xemkq.php');
        }
    ?>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td colspan="2">Nhập thông tin sinh viên</td>
            </tr>
            <tr>
                <td>Tên:</td>
                <td><input type="text" name="ten" value="<?php if(isset($ten)) 
                if(isset($_POST["xoa"]))
                echo ""; else echo $ten; else echo "";?>"></td>
            </tr>
            <tr>
                <td>Họ:</td>
                <td><input type="text" name="ho" value="<?php if(isset($ho)) if(isset($_POST["xoa"]))
                echo ""; else echo $ho; else echo "";?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diaChi" value="<?php if(isset($diaChi)) if(isset($_POST["xoa"]))
                echo ""; else echo $diaChi; else echo "";?>"></td>
            </tr>
            <tr>
                <td>Lớp:</td>
                <td>
                    <select name="lop">
                        <option value="1">CNTT</option>
                        <option value="2">KT</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="gui">Gửi</button>
                    <button type="submit" name="xoa">Xóa</button>
                    <button type="submit" name="xem">Xem kết quả</button>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php if(isset($kq)) if(isset($_POST["xoa"]))
                echo ""; else echo $kq; else echo "";?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>