<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Danh sách loại</h5>
                    <div class="table-responsive text-nowrap">
                        <form action="?btn_delete_all" method="post">
                            <button type="submit" class="btn btn-secondary" name="delete_all">Delete</button>
                            <a class="btn btn-primary"   role="button" href="index.php">Add</a>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="category1" onclick="checkedAllCate ();"></th>
                                        <th scope="col">Mã loại</th>
                                        <th scope="col">Tên loại</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                $stt = 0;
                                foreach ($item as $item) {
                                extract($item);
                                $stt++;?>
                                    <tr>
                                        <td> <input type="checkbox" class="category" name="cate[]" value="<?=$ma_loai?>"></td>
                                        <td><?= $ma_loai ?></td>
                                        <td><?= $ten_loai ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="index.php?btn_edit&ma_loai=<?= $item['ma_loai'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="index.php?btn_delete&ma_loai=<?= $item['ma_loai'] ?>"><i class="bx bx-edit-alt me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>