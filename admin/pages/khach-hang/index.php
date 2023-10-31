<?php
    require "../../../dao/pdo.php";
    require "../../../dao/khach-hang.php";
    require "../../../global.php";
    extract($_REQUEST);
    
    if(exist_param("btn_insert")){
        $up_hinh = save_file("hinh",$IMAGE_DIR);
        $hinh = strlen($up_hinh)>0?$up_hinh:'product_default.png';
        $value = check_form_add_customer();
        extract($value);

        if (empty($error)) {
            try {
                khach_hang_insert($ma_kh,$ten_kh,md5($mat_khau),$email,$hinh,$kich_hoat,$vai_tro);
                echo "<script>alert(\"Add successfully! \");</script>";
            } catch (PDOException $e) {
                throw $e;
                echo "<script>alert(\"Add failed! \");</script>";
            }
            $VIEW_NAME = "pages/khach-hang/list.php";
        }else {
            $VIEW_NAME = "pages/khach-hang/add.php";
        }
        $item = khach_hang_select_all();
    }
    else if(exist_param("btn_update")){
        $up_hinh = save_file("hinh",$IMAGE_DIR);
        $hinh = strlen($up_hinh)>0?$up_hinh:'product_default.png';
        $vai_tro  = $_POST['vai_tro'];

        $value = check_form_add_customer();
        extract($value);
        
        if (empty($error)) {
            try {
                khach_hang_update($ma_kh,$ten_kh,md5($mat_khau),$email,$hinh,$kich_hoat,$vai_tro);
                echo "<script>alert(\"Update successfully! \");</script>";
            } catch (PDOException $e) {
                throw $e;
                echo "<script>alert(\"Update failed! \");</script>";
            }
            $VIEW_NAME = "pages/khach-hang/list.php";
        }else {
            $VIEW_NAME = "pages/khach-hang/edit.php";
        }
        $item = khach_hang_select_all();
    }
    else if(exist_param("btn_delete")){
        $ma_kh = $_REQUEST['ma_kh'];
        try {
            khach_hang_delete($ma_kh);
            echo "<script>alert(\"Delete successfully! \");</script>";
        } catch (\Throwable $th) {
            throw $e;
            echo "<script>alert(\"Delete failed! \");</script>";
        }
       
        $item = khach_hang_select_all();
        $VIEW_NAME = "pages/khach-hang/list.php";
    }
    else if(exist_param("btn_deleteall")){
        $ma_kh = $_POST['kh'];
        try {
            khach_hang_delete($ma_kh);
            echo "<script>alert(\"Delete all successfully! \");</script>";
        } catch (\Throwable $th) {
            throw $e;
            echo "<script>alert(\"Delete failed! \");</script>";
        }
       
        $item = khach_hang_select_all();
        $VIEW_NAME = "pages/khach-hang/list.php";
    }
    else if(exist_param("btn_edit")){
        $ma_kh = $_REQUEST['ma_kh'];

        $khach_hang_info = khach_hang_select_by_id($ma_kh);
        extract($khach_hang_info);

        $VIEW_NAME = "pages/khach-hang/edit.php";
    }
    else if(exist_param("btn_list")){
        
        $item = khach_hang_select_all();
        $VIEW_NAME = "pages/khach-hang/list.php";
    }
    else{
        $VIEW_NAME = "pages/khach-hang/add.php";
    }
        
    require "../../layout.php"
?>