<?php
include_once("src/models/init.php");
if (isStudentSession()) {
    header("Location: index.php");
}

