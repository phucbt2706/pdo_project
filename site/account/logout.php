<?php
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    echo '<script>alert("Đã đăng xuất!")</script>';
    header('Location: ../home/');
}
?>