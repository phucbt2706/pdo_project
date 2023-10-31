<?php
    require "../../../dao/pdo.php";
    require "../../../dao/binh-luan.php";
    require "../../../dao/thong-ke.php";
    require "../../../global.php";

    extract($_REQUEST);

    if (exist_param("ma_hh"))
    {
        $items = binh_luan_select_by_hang_hoa($ma_hh);
        $VIEW_NAME = 'pages/binh-luan/detail.php';
    }
    elseif (exist_param('btn_list')) 
    {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = 'pages/binh-luan/list.php';
    }
    elseif (exist_param('btn_delete')) 
    {
        $ma_bl = $_REQUEST['ma_bl'];
        
        $items = binh_luan_delete_one($ma_bl);
        $VIEW_NAME = 'pages/binh-luan/detail.php';
    }
    elseif (exist_param('btn_delete_all')) 
    {
        $ma_bl = $_REQUEST['ma_bl[]'];

        $items = binh_luan_delete($ma_bl);
        $VIEW_NAME = 'pages/binh-luan/detail.php';
    }
    else
    {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = 'pages/binh-luan/list.php';
    }

    require "../../layout.php";

?>