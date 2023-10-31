<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <?php
                            if (isset($_SESSION['user'])) { ?>
                                <a href="#"><?= $_SESSION["user"]["name"] ?></a>
                                <a href="<?= $SITE_URL ?>/account/?log_out">Log Out</a>
                                <?php
                                if ($_SESSION['user']['role'] ==1) { ?>
                                    <a href="<?= $ROOT_URL ?>/admin/">Admin</a>
                                    <?php
                                }
                            }else{ ?> 
                                <a href="<?= $SITE_URL ?>/account/">Sign in</a>
                                <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="<?= $SITE_URL ?>/home/"><img src="<?= $IMG_URL ?>/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="<?= $SITE_URL ?>/home/">Home</a></li>
                        <li><a href="<?= $SITE_URL ?>/shop/">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="<?= $SITE_URL ?>/home/?about">About Us</a></li>
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= $SITE_URL ?>/home/?blog">Blog</a></li>
                        <li><a href="<?= $SITE_URL ?>/home/?contacts">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="<?= $IMG_URL ?>/icon/search.png" alt=""></a>
                    <a href="#"><img src="<?= $IMG_URL ?>/icon/heart.png" alt=""></a>
                    <a href="<?= $SITE_URL ?>/shop/?cart"><img src="<?= $IMG_URL ?>/icon/cart.png" alt=""> <span><?=(isset($_SESSION['cart']))? count($_SESSION['cart']['buy']) :false; ?></span></a>
                    <div class="price">$0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>