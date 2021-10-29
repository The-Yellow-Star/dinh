<?php
    session_start();
    if(!isset($_SESSION['login_ok'])){
        header("Location:../login.php");
    }
// Thẻ bài đã được cấp khi xác thực THÀNH CÔNG
// Mỗi THẺ BÀI = PHIÊN LÀM VIỆC = 24 phút 
// Nếu bạn ko LÀM GÌ: THU HỒI THẺ BÀI (Hủy phiên tự động)
// Đóng TRÌNH DUYỆT > Hủy phiên
// Hủy phiên chủ động: nhấp chọn logout
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php 
            echo "Welcome ".$_SESSION['login_ok']; 
            echo "<a href='logout.php'>Logout</a>";
        ?>
        
    </header>
    I am a Administration
</body>
</html>