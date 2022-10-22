<?php
    echo '<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>';
    // $serverName = "localhost";
    // $userName = "root";
    // $passWord = "";
    // $dbName = "thong_tin_sinh_vien";
    // $conn = mysqli_connect($serverName, $userName, $passWord, $dbName);
    include("./conection.php");
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    else {
        $query = "SELECT * FROM sinh_vien" ;
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "không xem được";
        }
        else{
            if(mysqli_num_rows($result)!= 0){
                echo "<div style='overflow-x: auto;'> 
                <table>
                    <tr>
                        <th>id</th>
                        <th>Tên</th>
                        <th>Họ</th>
                        <th>Địa chỉ</th>
                        <th>Lớp</th>
                    </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    for($i = 0; $i < mysqli_num_fields($result); $i++)
                    {
                        if($i== mysqli_num_fields($result)-1)
                        {
                            if($row[$i] == 1)
                            echo "<td><img src='https://images.unsplash.com/photo-1517849845537-4d257902454a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60' width=30px; height=30px' alt=''></td>";
                            else echo "<td><img src='https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2F0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60' width=30px; height=30px' alt=''></td>";
                        }
                        else echo "<td>".$row[$i]."</td>";
                    }
                    echo "</tr>";
                }

               echo " </table>
                </div>";
            }
        }
    }

    echo "<br><a href='./thongTinSV.php'>Trở về</a>";
?>