<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            <div id="form" class="row g-3">
                                <div class="col-12 text-center">
                                    <h2>Update the product "<?php echo $ten_hh; ?>"</h2>
                                </div>
                                <div class="col-6 form-froup">
                                    <label for="" class="form-label required">Mã sản phẩm</label>
                                    <input type="" class="form-control" readonly id="" value="<?php echo $ma_hh; ?>" name="ma_hh">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="" class="form-label required">Tên sản phẩm</label>
                                    <input type="" class="form-control" id="" value="<?php echo $ten_hh; ?>" name="ten_hh">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['name_format'])) {
                                                            echo $error['name_format'];
                                                        } else if (!empty($error['name_empty'])) {
                                                            echo $error['name_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="" class="form-label required">Đơn giá</label>
                                    <input type="" class="form-control" id="" value="<?php echo $don_gia; ?>" name="don_gia">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['price_format'])) {
                                                            echo $error['price_format'];
                                                        } else if (!empty($error['price_empty'])) {
                                                            echo $error['price_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="" class="form-label required">Giảm giá</label>
                                    <input type="" class="form-control" id="" value="<?php echo $giam_gia; ?>" name="giam_gia">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['sale_format'])) {
                                                            echo $error['sale_format'];
                                                        } else if (!empty($error['sale_empty'])) {
                                                            echo $error['sale_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="formFile" class="form-label required">Chọn hình ảnh</label>
                                    <input class="form-control" name="hinh" value="<?php echo $hinh ?>" type="file" id="formFile">
                                </div>
                                <div class="col-6 form-froup">
                                    <label for="" class="form-label required">Ngày nhập</label>
                                    <input type="" class="form-control datepicker" value="<?php echo $ngay_nhap; ?>" id="" name="ngay_nhap">
                                </div>

                                <div class="col-6 form-group ">
                                    <label for="" class="form-label required">Loại hàng</label>
                                    <select class="form-select" name="loai_hang">
                                        <!-- <option selected>Choose category of product</option> -->
                                        <?php
                                        foreach ($loai_info as $loai_info ) {
                                            extract($loai_info);
                                            echo "<option value=".$ma_loai.">".$ten_loai."</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-6 form-froup">
                                    <label for="" class="form-label required">Hàng đặc biệt</label>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="dac_biet" value="0" id="status-radio1">
                                        <label class="form-check-label" for="status-radio1">
                                            Chưa kích hoạt
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dac_biet" value="1" id="status-radio2" checked>
                                        <label class="form-check-label" for="status-radio2">
                                            Kích hoạt
                                        </label>
                                    </div>
                                </div>

                                <div class=" col-12 form-group">
                                    <label class="required">Mô tả</label>
                                    <textarea class="form-control" name="mo_ta" value="<?php echo $mot_ta ?>" rows="3"></textarea>
                                </div>
                                <div class="col-6">
                                    <button type="submit" name="btn_update" value="btn_update" class="btn btn-primary">Cập nhật</button>
                                    <button type="submit" name="btn_list" value="btn_list" class="btn btn-primary">Danh sách</button>
                                    <!-- <a class="btn btn-primary" href="index.php" role="button">Danh sách khách hàng</a> -->
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>