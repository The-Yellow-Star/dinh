<?php
// Bước 01: Kết nối tới SERVER
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','user');
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if(!$conn){
        die("Kết nối thất bại");
    }
?>