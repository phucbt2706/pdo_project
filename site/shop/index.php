<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/loai.php";
    require "../../dao/hang-hoa.php";
    extract($_REQUEST);

    if (exist_param("detail")) {
        $product_id = $_GET['ma_hh'];
        hang_hoa_tang_so_luot_xem($product_id);
        
        $items = hang_hoa_select_by_id($product_id);
        extract($items);

        $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
        $VIEW_NAME = 'shop/detail.php';
    }elseif (exist_param('addCart')) {
        $id = $_GET['ma_hh'];
        $VIEW_NAME = 'shop/addCart.php';
    }
    elseif (exist_param('delete')) {
        $id = $_GET['ma_hh'];
        deleteCart($id);

        $list = get_list_cart();
        $VIEW_NAME = 'shop/shopping-cart.php';
    }
    elseif (exist_param('updateCart')) {
        $qty = $_POST['qty'];
        updateQty($qty);

        $list = get_list_cart();
        $VIEW_NAME = 'shop/shopping-cart.php';
    }
    elseif (exist_param('cart')) {
        $list = get_list_cart();
        $VIEW_NAME = 'shop/shopping-cart.php';
    }
    elseif (exist_param('check_out')) {
        $list = get_list_cart();
        $VIEW_NAME = 'shop/checkout.php';
    }
    elseif (exist_param('order')) {
        
        if (isset($_SESSION['user'])) {
            echo '<script>alert("Đã đặt hàng thành công")</script>';
            unset($_SESSION['cart']);

            $VIEW_NAME = 'shop/shop.php';
        }else {
            header('Location: ../account/');
        }
        $infor_product = hang_hoa_select_all();
        $item = loai_select_all();
    }
    elseif (exist_param('category')) {
        $ma_loai = $_REQUEST['id'];
        $rows = num_row_cate($ma_loai);
        
        $total_rows  = $rows[0]['num_row'];
        //Số lượng dữ liệu (bản ghi) trên 1 trang
        $num_rows_in_page = 9;
    
        //Tổng số trang cho $total_rows bảng ghi với mỗi trang là $num_row_in_page bảng ghi
        $num_page = ceil($total_rows / $num_rows_in_page);
    
        //Chỉ số trang hiện tại trên URL
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //Chỉ số để thay đổi dữ liệu khi chuyển trang
    
        //Chỉ số bắt đầu
        $start = ($page - 1) * $num_rows_in_page;
        
        
        $infor_product = hang_hoa_select_loai_page($ma_loai,$start,$num_rows_in_page);
        $item = loai_select_all();
        $VIEW_NAME = 'shop/shop.php';
    }
    elseif (exist_param("shop")){
        $rows = num_row();
        $total_rows  = $rows[0]['num_row'];
        //Số lượng dữ liệu (bản ghi) trên 1 trang
        $num_rows_in_page = 9;
    
        //Tổng số trang cho $total_rows bảng ghi với mỗi trang là $num_row_in_page bảng ghi
        $num_page = ceil($total_rows / $num_rows_in_page);
    
        //Chỉ số trang hiện tại trên URL
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //Chỉ số để thay đổi dữ liệu khi chuyển trang
    
        //Chỉ số bắt đầu
        $start = ($page - 1) * $num_rows_in_page;

        $infor_product = hang_hoa_select_page($start,$num_rows_in_page);

        $item = loai_select_all();
        $VIEW_NAME = 'shop/shop.php';
    }
    else{
        $rows = num_row();

        $total_rows  = $rows[0]['num_row'];
        //Số lượng dữ liệu (bản ghi) trên 1 trang
        $num_rows_in_page = 9;
    
        //Tổng số trang cho $total_rows bảng ghi với mỗi trang là $num_row_in_page bảng ghi
        $num_page = ceil($total_rows / $num_rows_in_page);
    
        //Chỉ số trang hiện tại trên URL
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //Chỉ số để thay đổi dữ liệu khi chuyển trang
    
        //Chỉ số bắt đầu
        $start = ($page - 1) * $num_rows_in_page;
        $infor_product = hang_hoa_select_page($page,$num_rows_in_page);

        $item = loai_select_all();
        $VIEW_NAME = 'shop/shop.php';
    }

    require "../layout.php";
?>