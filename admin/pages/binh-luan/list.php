<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Danh sách bình luận</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">All</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Số bình luận</th>
                                    <th scope="col">Mới nhất</th>
                                    <th scope="col">Cũ nhất</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">
                                <?php
                                foreach ($items as $item) {
                                    extract($item)?>
                                <tr>
                                    <td> <input type="checkbox" name="ma_kh[]" value=""></td>
                                    <td><?= $ten_hh; ?></td>
                                    <td><?= $so_luong; ?></td>
                                    <td><?= $cu_nhat; ?></td>
                                    <td><?= $moi_nhat; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="index.php?ma_hh=<?= $ma_hh ?>"><i class="bx bx-edit-alt me-1"></i> Chi tiết</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>