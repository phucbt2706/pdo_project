<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-7">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="index.php" method="post" id="myForm" enctype="multipart/form-data">
                            <div class="row mb-4">
                                <div class="col-12 text-center">
                                    <h2>Thêm người dùng</h2>
                                </div>
                                <div class="col-6">
                                    <label for="" class="form-label required">Tên đăng nhập</label>
                                    <input type="" class="form-control" id="" value="<?php echo (!empty($_POST['ma_kh'])) ? $_POST['ma_kh'] : false; ?>" name="ma_kh">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['username_format'])) {
                                                            echo $error['username_format'];
                                                        } else if (!empty($error['username_empty'])) {
                                                            echo $error['username_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6">
                                    <label for="" class="form-label required">Tên khách hàng</label>
                                    <input type="" class="form-control" id=" " value="<?php echo (!empty($_POST['ten_kh'])) ? $_POST['ten_kh'] : false; ?>" name="ten_kh">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['fullname_format'])) {
                                                            echo $error['fullname_format'];
                                                        } else if (!empty($error['fullname_empty'])) {
                                                            echo $error['fullname_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6">
                                    <label for="inputPassword4" class="form-label required">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword4" value="<?php echo (!empty($_POST['mat_khau'])) ? $_POST['mat_khau'] : false; ?>" name="mat_khau">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['password_format'])) {
                                                            echo $error['password_format'];
                                                        } else if (!empty($error['password_empty'])) {
                                                            echo $error['password_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6">
                                    <label for="inputPassword4" class="form-label required">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword4" value="<?php echo (!empty($_POST['mat_khau'])) ? $_POST['mat_khau'] : false; ?>" name="mat_khau2">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['password_format'])) {
                                                            echo $error['password_format'];
                                                        } else if (!empty($error['password_empty'])) {
                                                            echo $error['password_empty'];
                                                        }else if (!empty($error['password_error'])) {
                                                            echo $error['password_error'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label required">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo (!empty($_POST['email'])) ? $_POST['email'] : false; ?>" placeholder="name@example.com">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['email_format'])) {
                                                            echo $error['email_format'];
                                                        } else if (!empty($error['email_empty'])) {
                                                            echo $error['email_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6">
                                    <label for="formFile" class="form-label required">Chọn hình ảnh</label>
                                    <input class="form-control" name="hinh" type="file" id="formFile">
                                </div>
                                <div class="col-6">
                                    <label for="" class="form-label required">Trạng thái</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kich_hoat" value="0" id="status-radio1">
                                        <label class="form-check-label" for="status-radio1">
                                            Chưa kích hoạt
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kich_hoat" value="1" id="status-radio2" checked>
                                        <label class="form-check-label" for="status-radio2">
                                            Kích hoạt
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="" class="form-label required">Vai trò</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="vai_tro" value="0" id="role-radio3">
                                        <label class="form-check-label" for="role-radio3">
                                            Khách hàng
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="vai_tro" value="1" id="role-radio4" checked>
                                        <label class="form-check-label" for="role-radio">
                                            Nhân viên
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" name="btn_insert" value="btn_insert" class="btn btn-primary">Thêm mới</button>
                                    <button type="submit" name="btn_list" value="btn_list" class="btn btn-primary">Danh sách</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>