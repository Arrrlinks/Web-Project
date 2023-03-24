<?php
require_once('src/models/wishlist_m.php');
$pageUser = $_GET['userpage'];
$offresResult = getWishlist();
$totalPagesOffre = totalPagesOffre();
require_once('view/wishlist.php');