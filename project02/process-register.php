<!-- Register.php gửi theo PT POST > process-register.php: truy vấn từ mảng $_POST -->
<!-- Xem hình thù 1 MẢNG trước khi xử lý nó -->

<?php
    // echo '<pre>';
    // echo print_r($_POST);
    // echo '</pre>';
    // Nhận giá trị từ FORM register gửi sang:
    $first_name = $_POST['firstName'];
    $last_name  = $_POST['lastName'];
    $email      = $_POST['email'];
    $pass1      = $_POST['pass1'];
    $pass2      = $_POST['pass2'];
    // Kiểm tra pass1 === pass2 (Javascript kiểm tra luôn)
    // QUY TRÌNH 4 (3) bước
    // Bước 01:
    include('config/db.php');

    // Bước 02: Thực hiện các truy vấn
    // 2.1 - Kiểm tra Email này đã tồn tại chưa?
    $sql_1 = "SELECT * FROM users WHERE email='$email'";
    $result_1 = mysqli_query($conn,$sql_1);

    if(mysqli_num_rows($result_1) > 0){
        $value='existed';
        header("Location:register.php?response=$value");
    }else{
        // 2.2 - Nếu ko tồn tại thì mới LƯU
        // Băm mật khẩu
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql_2 = "INSERT INTO users(first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$pass_hash')";
        $result_2 = mysqli_query($conn,$sql_2); //Vì lệnh thực hiện là INSERT: kết quả trả về của $result_2 là SỐ BẢN GHI CHÈN THÀNH CÔNG (SỐ NGUYÊN)

        if($result_2 > 0){
            $value='successfully';
            header("Location:register.php?response=$value");
        }
    }
    

?>