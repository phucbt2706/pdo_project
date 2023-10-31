<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            <div id="form-add-category" class="row flex-column  g-3">
                                <div class="col-12 text-center">
                                    <h2>Thêm loại hàng</h2></h2>
                                </div>
                                <div class="col-6">
                                    <label for="" class="form-label required">Tên loại</label>
                                    <input type="" class="form-control" id="" name="ten_loai">
                                    <span id="red_error" class="form-text"><?php if (!empty($error['name_format'])) {
                                                            echo $error['name_format'];
                                                        } else if (!empty($error['name_empty'])) {
                                                            echo $error['name_empty'];
                                                        }
                                                        ?> </span>
                                </div>
                                <div class="col-6">
                                    <button type="submit" name="btn_insert" value="btn_insert" class="btn btn-primary">Thêm</button>
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