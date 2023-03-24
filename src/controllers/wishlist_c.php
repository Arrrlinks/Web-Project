<?php
require_once('src/models/wishlist_m.php');
$pageWishlist = $_GET['wishlistpage'];
$wishlistResult = getWishlist();
$totalPagesWishlist = totalPagesWishlist();
require_once('view/wishlist.php');