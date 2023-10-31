<?php
    require "../../../dao/pdo.php";
    require "../../../dao/loai.php";
    require "../../../global.php";
    
    extract($_REQUEST);

    if(exist_param("btn_insert")){
        $value = check_form_add_category();
        extract($value);
        
        if (empty($error)) {
            try {
                loai_insert($ten_loai);
                echo "<script>alert(\"Add successfully! \");</script>";
            } catch (PDOException $e) {
                throw $e;
                echo "<script>alert(\"Add failed! \");</script>";
            }
            $VIEW_NAME = "pages/loai-hang/list.php";
        }else{
            $VIEW_NAME = "pages/loai-hang/add.php";
        }
       
        $item = loai_select_all();
    }
    else if(exist_param("btn_update")){
        $ma_loai = $_REQUEST['ma_loai'];
        $value = check_form_add_category();
        extract($value);

        if(empty($error)) {
            try {
                loai_update($ma_loai, $ten_loai);
                echo "<script>alert(\"Update successfully! \");</script>";
            } catch (PDOException $e) {
                throw $e;
                echo "<script>alert(\"Update failed! \");</script>";
            }
            $VIEW_NAME = "pages/loai-hang/list.php";
        }else{
            $VIEW_NAME = "pages/loai-hang/edit.php";
        }
        
        $item = loai_select_all();
    }
    else if(exist_param("btn_delete")){
        $ma_loai = $_REQUEST['ma_loai'];
        try {
            loai_delete($ma_loai);
            echo "<script>alert(\"Delete successfully! \");</script>";
        } catch (PDOException $e) {
            throw $e;
            echo "<script>alert(\"Delete failed! \");</script>";
        }

        $item = loai_select_all();
        $VIEW_NAME = "pages/loai-hang/list.php";
    }
    else if(exist_param("btn_delete_all")){
        $ma_loai = $_POST['cate'];

        try {
            loai_delete($ma_loai);
            echo "<script>alert(\"Delete successfully! \");</script>";
        } catch (PDOException $e) {
            throw $e;
            echo "<script>alert(\"Delete failed! \");</script>";
        }

        $item = loai_select_all();
        $VIEW_NAME = "pages/loai-hang/list.php";
    }
    else if(exist_param("btn_edit")){
        $loai_info = loai_select_by_id($ma_loai);
        extract($loai_info);

        $VIEW_NAME = "pages/loai-hang/edit.php";
    }
    else if(exist_param("back_web")){
        header("Location: assignment/index.php");
    }
    else if(exist_param("btn_list")){
        $item = loai_select_all();
        $VIEW_NAME = "pages/loai-hang/list.php";
    }
    else{
        $VIEW_NAME = "pages/loai-hang/add.php";
    }
        
    require "../../layout.php"
?>