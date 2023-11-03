<?php
    require "../../dao/pdo.php";
    require '../../global.php';
    require "../../dao/khach-hang.php";

    if (isset($_POST['btn_login'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $user = khach_hang_select_by_id($username);

        if ($user) {
            if (md5($pass) == $user['mat_khau'] ) {
                $_SESSION['user']['name'] = $user['ten_kh'];
                $_SESSION['user']['email'] = $user['email'];
                $_SESSION['user']['role'] = $user['vai_tro'];
                if (!empty($_SESSION['check'])) {
                    header('Location: ../shop/?check_out');
                }else {
                    header('Location: ../shop/');
                }
            }else {
                echo "<script>alert(\"Sai mật khẩu! \");</script>";
                $VIEW_NAME = 'login-form.php';
                require "layout.php";
            }
        }else {
            echo "<script>alert(\"Tên đăng nhập không tồn tại! \");</script>";
            $VIEW_NAME = 'login-form.php';
            require "layout.php";
        }

        
      
    }  
?>