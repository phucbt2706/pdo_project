<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Chi tiết bình luận</h5>
                    <div class="table-responsive text-nowrap">
                        <form action="" method="post">
                            <div>
                                <a class="btn btn-primary" role="button" href="">Chọn tất cả</a>
                                <a class="btn btn-primary" role="button" href="">Bỏ chọn tát cả</a>
                                <a class="btn btn-primary" role="button" href="index.php?btn_delete_all">Xóa tất cả mục đã chọn</a>
                                <a class="btn btn-primary" role="button" href="index.php">Danh sách bình luận</a>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Ngày bình luận</th>
                                        <th scope="col">Người bình luận</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
            if (!empty($items)) {
                foreach ($items as $items) {
                    extract($items)?>

                                    <tr>
                                        <td> <input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"></td>
                                        <td><?= $noi_dung ?></td>
                                        <td><?= $ngay_bl ?></td>
                                        <td><?= $ma_kh ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>"><i class="bx bx-edit-alt me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                }
            }else{ ?>

                                    <tr>
                                        <td><?= "Không có dữ liệu nào!" ?></td>
                                    </tr>
                                    <?php  }?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>