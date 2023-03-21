<?php
require_once('src/models/init.php');

if(isStudentSession()){
    header('Location: index.php');
    exit();
}