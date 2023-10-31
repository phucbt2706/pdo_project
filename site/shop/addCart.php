<?php
    addCart($id);
    updateCart();
    header("location: $ROOT_URL/site/shop/?cart");
?>