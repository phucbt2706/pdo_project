<?php
    require "../../../dao/pdo.php";
    require '../../../global.php';
    require "../../../dao/khach-hang.php";

    if (isset($_POST['btn_login'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $user = khach_hang_select_by_id($username);

        if ($user) {
            if ($pass == $user['mat_khau']) {
                $_SESSION['user'] = $username;
                header('Location: /assignment/admin/pages/trang-chinh/');
            }else {
                echo "<script>alert(\"Sai mật khẩu! \");</script>";
            }
        }else {
            echo "<script>alert(\"Tên đăng nhập không tồn tại! \");</script>";
        }
      
    }  
?>