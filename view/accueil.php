<?php $title = "CesiEnFait"; ?>
<?php $css = "accueil.css"; ?>
<?php $navbar = 1; ?>
<?php $sidenav = 1; ?>
<?php ob_start(); ?>
<img src="../svg/br-tl%201.svg" alt="tl logo" id="tl1" class="cloud-image">
<img src="../svg/br-tl%202.svg" alt="tl logo" id="tl2" class="cloud-image">
<img src="../svg/br-tl%201.svg" alt="br logo" id="br1" class="cloud-image">
<img src="../svg/br-tl%202.svg" alt="br logo" id="br2" class="cloud-image">
<img src="../svg/tr-bl%201.svg" alt="tr logo" id="bl1" class="cloud-image">
<img src="../svg/tr-bl%202.svg" alt="tr logo" id="bl2" class="cloud-image">
<img src="../svg/tr-bl%203.svg" alt="tr logo" id="bl3" class="cloud-image">

<div id="container-title">
<div id="title">
<span class="title">
    <span >Cesi</span>
    <span>EnFait</span>
</span>
    <p>Parce que c'est votre projet !</p>
    <form action="?navigation" class="searchbar" method="get">
        <svg class="searchicon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
        <label>
            <input type="hidden" name="navigation">
            <input name="q" placeholder="Rechercher un stage" type="search">
            <input type="hidden" name="userpage" value="1">
            <input type="hidden" name="entreprisepage" value="1">
            <input type="hidden" name="offrepage" value="1">
        </label>
    </form>
</div>
</div>

<script src="accueil.js"></script>

<?php $content=ob_get_clean(); ?>
<?php require('view/template.php');?>