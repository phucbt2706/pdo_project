<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/hang-hoa.php";
   
    extract($_REQUEST);

    if (exist_param("blog")) {
        $VIEW_NAME = 'home/blog.php';
    }
    elseif (exist_param("contacts")) {
        $VIEW_NAME = 'home/contact.php';
    }
    elseif (exist_param("about")) {
        $VIEW_NAME = 'home/about.php';
    }
    elseif (exist_param("cart")) {
        $VIEW_NAME = 'home/about.php';
    }
    elseif (exist_param("home")){
        $item = hang_hoa_select_top10();
        $VIEW_NAME = 'home/home.php';
    }
    else{
        $item = hang_hoa_select_top10();
        $VIEW_NAME = 'home/home.php';
    }

    require "../layout.php";
?>