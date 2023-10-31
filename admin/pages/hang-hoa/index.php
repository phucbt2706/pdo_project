<?php
    require "../../../dao/pdo.php";
    require "../../../dao/hang-hoa.php";
    require "../../../dao/loai.php";
    require "../../../global.php";

    extract($_REQUEST);
    
    if(exist_param("btn_insert")){
        $up_hinh = save_file("hinh",$IMAGE_DIR);
        $hinh = strlen($up_hinh) > 0 ? $up_hinh:'product_default.png';
        $ngay_nhap = date_format(date_create(),'Y-m-d');
        $ma_loai = $_POST['loai_hang'];
        $value = check_form_add_product ($ten_hh,$don_gia,$giam_gia);
        extract($value);

        if (empty($error)) {
            try {
                hang_hoa_insert( $ten_hh, $don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$ma_loai);
                echo "<script>alert(\"Add successfully! \");</script>";
            } catch (PDOException $e) {
                throw $e;
                echo "<script>alert(\"Add failed! \");</script>";
            }
            $VIEW_NAME = "pages/hang-hoa/list.php";
        }else {
            $VIEW_NAME = "pages/hang-hoa/add.php";
        }
        
        $loai_info = loai_select_all();
        $item = hang_hoa_select_all();
    }
    else if(exist_param("btn_update")){
        $ma_hh = $_REQUEST['ma_hh'];
        $ma_loai = $_POST['loai_hang'];
        $up_hinh = save_file("hinh",$IMAGE_DIR);
        $hinh = strlen($up_hinh) > 0 ? $up_hinh:'product_default.png';
        $ngay_nhap = date_format(date_create(),'Y-m-d');
        $value = check_form_add_product ();
        extract($value);

        if (empty($error)) {
            try {
                hang_hoa_update($ma_hh, $ten_hh, $don_gia,$giam_gia,$hinh,$ngay_nhap,$mo_ta,$dac_biet,$ma_loai);
                echo "<script>alert(\"Update successfully! \");</script>";
            } catch (PDOException $e) {
                echo "<script>alert(\"Update failed!\");</script>";
            }
            $VIEW_NAME = "pages/hang-hoa/list.php";
        }else{
            $VIEW_NAME = "pages/hang-hoa/edit.php";
        }
       
        $loai_info = loai_select_all();
        $item = hang_hoa_select_all();
    }
    else if(exist_param("btn_delete")){
        $ma_hh = $_REQUEST['ma_hh'];
        
        try {
            hang_hoa_delete($ma_hh);
            echo "<script>alert(\"Delete successfully!\");</script>";
        } catch (PDOException $e) {
            throw $e;
            echo "<script>alert(\"Delete failed! \");</script>";
        }
        $item = hang_hoa_select_all();
        $VIEW_NAME = "pages/hang-hoa/list.php";
    }
    else if(exist_param("btn_delete_all")){
        $ma_hh = $_POST['hh'];
        
        try {
            hang_hoa_delete($ma_hh);
            echo "<script>alert(\"Delete successfully!\");</script>";
        } catch (PDOException $e) {
            throw $e;
            echo "<script>alert(\"Delete failed! \");</script>";
        }
        $item = hang_hoa_select_all();
        $VIEW_NAME = "pages/hang-hoa/list.php";
    }
    else if(exist_param("btn_edit")){
        $ma_hh = $_REQUEST['ma_hh'];

        $loai_info = loai_select_all();

        $hang_hoa_info = hang_hoa_select_by_id($ma_hh);
        extract($hang_hoa_info);

        $VIEW_NAME = "pages/hang-hoa/edit.php";
    }
    else if(exist_param("btn_list")){
        $item = hang_hoa_select_all();
        $VIEW_NAME = "pages/hang-hoa/list.php";   
    }
    else{
        $loai_info = loai_select_all();
        $VIEW_NAME = "pages/hang-hoa/add.php";
    }
        
    require "../../layout.php"
?>