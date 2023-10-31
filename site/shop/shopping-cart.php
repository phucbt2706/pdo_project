<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <?php 
    if (!empty($list)) {
        ?>
        <div class="row">
            <div class="col-xl-8">
                <form action="?updateCart" method="post">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Thông tin</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($list as $item) {
                                    extract($item);
                                    ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img class="img_product" src="<?= $CONTENT_URL ?>/images/<?= $hinh ?>" alt="">
                                        </div>

                                    </td>
                                    <td>
                                        <div class="product__cart__item__text">
                                            <h6><?= $ten_hh ?></h6>
                                            <h5><?= currency_format($sub_total) ?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" name="qty[<?= $id ?>]" min="1" max="20" value="<?= $qty ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?= currency_format($sub_total)  ?></td>
                                    <td class="cart__close"><a href="?delete&ma_hh=<?= $id ?>"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <?php   
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="?shop">Tiếp tục mua ..</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <!-- <a href="#"><i class="fa fa-spinner"></i> Update cart</a> -->
                                <button class="btn_sub" name="btn_update_qty" type="submit"><i class="fa fa-spinner"></i> Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4">
                <div class="cart__discount">
                    <h6>Mã giảm giá</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Áp dụng</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Giỏ hàng</h6>
                    <ul>
                        <!-- <li>Subtotal <span>$ 169.50</span></li> -->
                        <li>Tổng <span><?= currency_format( get_total_cart()) ?></span></li>
                    </ul>
                    <a href="?check_out" class="primary-btn">Check Out</a>
                </div>
            </div>
        </div>
        <?php
    }else{
        ?>
        <div class="row">
            <div class="col-12">
                <h2>Giỏ hàng trống</h2>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</section>
<!-- Shopping Cart Section End -->