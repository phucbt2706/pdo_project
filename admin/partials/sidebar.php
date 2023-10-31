<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- Logo -->
    <div class="app-brand demo">
        <a href="<?= $ADMIN_URL ?>/pages/trang-chinh/index.php" class="app-brand-link">
        <!-- <img id="img_hh" src=" "../../../content/images/upload"" alt=""> -->
        <span class=" demo menu-text fw-bolder ms-2"><?= (isset($_SESSION['user']))?$_SESSION['user']['name']:"Admin"; ?></span>
        </a>
    </div>
    
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item ">
            <a href="<?= $ADMIN_URL ?>/pages/trang-chinh/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Category -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div>Category</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/loai-hang/index.php?btn_list" class="menu-link">
                        <div>List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/loai-hang/index.php?btn_add" class="menu-link">
                        <div>Add</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- end Category -->

        <!-- Product -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Layouts">Product</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/hang-hoa/index.php?btn_list" class="menu-link">
                        <div data-i18n="Without menu">List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/hang-hoa/index.php?btn_add" class="menu-link">
                        <div data-i18n="Without navbar">Add</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- end Product -->

        <!-- User -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">User</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/khach-hang/index.php?btn_list" class="menu-link">
                        <div data-i18n="Without menu">List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/khach-hang/index.php?btn_add" class="menu-link">
                        <div data-i18n="Without navbar">Add</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- end User -->

        <!-- Menu commnent -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-comment"></i>
                <div data-i18n="Layouts">Comment</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/binh-luan/index.php?btn_list" class="menu-link">
                        <div data-i18n="Without menu">List</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End menu commnent -->

        <!-- Menu Statistics -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                <div data-i18n="Layouts">Statistics</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/thong-ke/index.php?btn_list" class="menu-link">
                        <div data-i18n="Without menu">List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= $ADMIN_URL ?>/pages/thong-ke/index.php?btn_chart" class="menu-link">
                        <div data-i18n="Without menu">Chart</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End menu Statistics-->

        <li class="menu-item">
            <a href="<?= $ROOT_URL ?>/" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                <div data-i18n="Layouts">My website</div>
            </a>
        </li>
        
    </ul>
</aside>