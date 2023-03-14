<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
<img src="svgs/br-tl 1.svg" alt="tl logo" id="tl1">
<img src="svgs/br-tl 2.svg" alt="tl logo" id="tl2">
<img src="svgs/br-tl 1.svg" alt="br logo" id="br1">
<img src="svgs/br-tl 2.svg" alt="br logo" id="br2">
<img src="svgs/tr-bl 1.svg" alt="tr logo" id="bl1">
<img src="svgs/tr-bl 2.svg" alt="tr logo" id="bl2">
<img src="svgs/tr-bl 3.svg" alt="tr logo" id="bl3">
<div class = navbar>
    <ion-icon name="heart-outline"></ion-icon>
    <ion-icon name="notifications"></ion-icon>
    <ion-icon name="person-circle-outline"></ion-icon>
</div>
<?php
    include 'element/burger/burger.php';
?>
<div id="title">
    <H1> Trouve ton stage </H1>
    <p>Cette page est reserve aux personnes et personnel du CESI pour trouver leurs stages. </p>
    <div class="searchbar">
        <svg class="searchicon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
        <label>
            <input placeholder="Rechercher un stage" type="search">
        </label>
    </div>
</div>

</body>