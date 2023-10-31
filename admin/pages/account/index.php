<?php
    require_once "../../../dao/pdo.php";
    require '../../../global.php';
    require "../../../dao/khach-hang.php";

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
    else {
        $VIEW_NAME = 'login-form.php';
    }

    require "layout.php";
?>