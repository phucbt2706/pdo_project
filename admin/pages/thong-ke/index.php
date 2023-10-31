<?php
    require "../../../dao/pdo.php";
    require "../../../dao/binh-luan.php";
    require "../../../dao/thong-ke.php";
    require "../../../global.php";

    extract($_REQUEST);

    if (exist_param("btn_list")){
        
        $items = thong_ke_hang_hoa();
        $VIEW_NAME = 'pages/thong-ke/list.php';
    }elseif (exist_param("btn_chart")) {
        $items = thong_ke_hang_hoa();
        $VIEW_NAME = 'pages/thong-ke/chart.php';
    }
    else{
        $VIEW_NAME = 'pages/thong-ke/chart.php';
    }

    require "../../layout.php";
?>