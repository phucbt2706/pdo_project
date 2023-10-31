<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">List product</h5>
                    <div class="table-responsive text-nowrap">
                        <form action="?btn_delete_all" method="post">
                            <button type="submit" class="btn btn-secondary" name="delete_all">Delete</button>
                            <a class="btn btn-primary"   role="button" href="index.php">Add</a>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="hh[]" id="product1" onclick="checkedAllPro();"></th>
                                        <th scope="col">ID.</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Đơn giá</th>
                                        <th scope="col">Giảm giá</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Ngày nhập</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Đặc biệt</th>
                                        <th scope="col">Số lượt xem</th>
                                        <th scope="col">Mã loại</th>
                                        <th scope="col" colspan="2">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            foreach ($item as $item) { extract($item)?>
                                    <tr>
                                        <td> <input type="checkbox" class="product" name="hh[]" value="<?=$ma_hh?>"></td>
                                        <td>SP0<?= $ma_hh ?></td>
                                        <td><?= $ten_hh ?></td>
                                        <td><?= $don_gia ?></td>
                                        <td><?= $giam_gia ?></td>
                                        <td><img id="img_hh" src="<?= "../../../content/images/". $hinh ?>" alt=""></td>
                                        <td><?= $ngay_nhap ?></td>
                                        <td><?= $mo_ta ?></td>
                                        <td><?= $dac_biet ?></td>
                                        <td><?= $so_luot_xem ?></td>
                                        <td><?= $ma_loai ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="index.php?btn_edit&ma_hh=<?= $ma_hh ?>"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="index.php?btn_delete&ma_hh=<?= $ma_hh ?>"><i class="bx bx-edit-alt me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php 
                            } ?>
                                </tbody>
                            </table>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>