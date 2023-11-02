<?php
    require "../../dao/pdo.php";
    require "../../global.php";
    require "../../dao/khach-hang.php";

    extract($_REQUEST);

    if (exist_param('btn_forgot')) {
        $VIEW_NAME = 'forgot.php';
    }
    elseif (exist_param('btn_reset')) {
        $VIEW_NAME = 'reset.php';
    }
    elseif (exist_param('btn_register')) {
        $VIEW_NAME = 'register.php';
    }
    elseif (exist_param('log_out')) {
        $VIEW_NAME = 'logout.php';
    }
    elseif (exist_param('login')) {
        $VIEW_NAME = 'login-form.php';
    }
    else {
        $VIEW_NAME = 'login-form.php';
    }

    require "layout.php";
?>