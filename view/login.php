<?= $title='Login' ?>
<?= $css='login.css' ?>
<?php $navbar = 0; ?>
<?php $sidenav = 1; ?>

<?php ob_start(); ?>

<img src="../svgs/br-tl%201.svg" alt="tl logo" id="tl1">
<img src="../svgs/br-tl%202.svg" alt="tl logo" id="tl2">
<img src="../svgs/br-tl%201.svg" alt="br logo" id="br1">
<img src="../svgs/br-tl%202.svg" alt="br logo" id="br2">

<img src="../svgs/tr-bl%201.svg" alt="tr logo" id="tr1">
<img src="../svgs/tr-bl%202.svg" alt="tr logo" id="tr2">
<img src="../svgs/tr-bl%203.svg" alt="tr logo" id="tr3">

<img src="../svgs/tr-bl%201.svg" alt="tr logo" id="bl1">
<img src="../svgs/tr-bl%202.svg" alt="tr logo" id="bl2">
<img src="../svgs/tr-bl%203.svg" alt="tr logo" id="bl3">
<div id="la"></div>
<div id="login">
    <h1>Login</h1>
    <form action="?login" method="post">
        <div class="wave-group">
            <input name="id" type="text" class="input" required>
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">I</span>
                <span class="label-char" style="--index: 1">d</span>
                <span class="label-char" style="--index: 2">e</span>
                <span class="label-char" style="--index: 3">n</span>
                <span class="label-char" style="--index: 4">t</span>
                <span class="label-char" style="--index: 5">i</span>
                <span class="label-char" style="--index: 6">f</span>
                <span class="label-char" style="--index: 7">i</span>
                <span class="label-char" style="--index: 8">a</span>
                <span class="label-char" style="--index: 9">n</span>
                <span class="label-char" style="--index: 10">t</span>
            </label>
        </div>
        <div class="wave-group" id="password">
            <input name="password" type="password" class="input" required>
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">s</span>
                <span class="label-char" style="--index: 4">w</span>
                <span class="label-char" style="--index: 5">o</span>
                <span class="label-char" style="--index: 6">r</span>
                <span class="label-char" style="--index: 7">d</span>
            </label>
        </div>
        <?= $isLogin ?>
        <button class="login" type="submit">
            <p>Login</p>
            <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
        </button>
    </form>
</div>

<?php $content=ob_get_clean(); ?>

<?php require('view/template.php');?>