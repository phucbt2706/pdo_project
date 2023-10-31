<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Danh sách người dùng</h5>
                    <div class="table-responsive text-nowrap">
                        <form action="?btn_deleteall" method="post">
                            <button type="submit" class="btn btn-secondary" name="delete_all">Delete</button>
                            <a class="btn btn-primary"   role="button" href="index.php">Add</a>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="kh[]" id="name1" onclick="checkedAllUser();"></th>
                                        <th scope="col">Tên đăng nhập</th>
                                        <th scope="col">Mật khẩu</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Vai trò</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                foreach ($item as $item) {
                                    extract($item)?>
                                    <tr>
                                        <td> <input type="checkbox" class="name1" name="kh[]" value="<?=$ma_kh?>"></td>
                                        <td><?=$ma_kh?></td>
                                        <td><?=md5($mat_khau)?></td>
                                        <td><?=$ten_kh?></td>
                                        <td><?=$email?></td>
                                        <td><img id="img_hh" src="../../../content/images/<?= $hinh ?>" alt=""></td>
                                        <td><?=$kich_hoat?></td>
                                        <td><?=$vai_tro?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="index.php?btn_edit&ma_kh=<?=$ma_kh?>"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="index.php?btn_delete&ma_kh=<?=$ma_kh?>"><i class="bx bx-edit-alt me-1"></i>Delete</a>
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