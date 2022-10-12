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

    $query = 'SELECT * FROM khach_hang';

    $result = mysqli_query($conn, $query);
    if(!$result)
    die('<br> <b>Query Faild</b>');
    if(mysqli_num_rows($result)!= 0){
        while($row = mysqli_fetch_array($result))
        {
            echo "<br>";
            for($i = 0; $i < mysqli_num_fields($result); $i++)
                echo $row[$i], " ";
        }
    }

    mysqli_free_result($result);
    mysqli_close($result);
?>