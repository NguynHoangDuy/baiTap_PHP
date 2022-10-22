<?php
    $serverName = "localhost";
    $userName = "root";
    $passWord = "";
    $dbName = "quan_ly_ban_sua";
    $conn = mysqli_connect($serverName, $userName, $passWord, $dbName);

    //Check connection

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    else echo "Kết nối thành công";

    //Truy vấn
    $maKh = "kh008";
    $tenKh = "Nguyễn Hoàng Duy";
    $phai = "0";
    $diaChi = "Nha Trang";
    $dienThoai = "0369454037";
    $email = "duy.nh.61cntt@ntu.edu.vn";
    $query = 'SELECT * FROM khach_hang WHERE Phai = "0"' ;
    $queryDelete = 'DELETE FROM khach_hang WHERE Ma_khach_hang = "kh008"' ;
    $queryInsert = "INSERT INTO `khach_hang`(`Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES ('[$maKh]','[$tenKh]','[$phai]','[$diaChi]','[$diaChi]','[$email]')" ;
    $queryUpdate = "UPDATE `khach_hang` SET `Ma_khach_hang`='[$maKh]',`Ten_khach_hang`='[value-2]',`Phai`='[value-3]',`Dia_chi`='[value-4]',`Dien_thoai`='[value-5]',`Email`='[value-6]' WHERE 1"
    $result = mysqli_query($conn, $queryInsert);
    
    if(!$result)
    die('<br> <b>Query Faild</b>');
    else echo "Thêm thành công";
    // if(mysqli_num_rows($result)!= 0){
    //     while($row = mysqli_fetch_row($result))
    //     {
    //         var_dump($row);
    //         echo "<br>";
    //     }
    // }

    mysqli_free_result($result);
    mysqli_close($result);
?>