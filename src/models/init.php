<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
function dbConnect()
{
    $db = new PDO('mysql:host=92.222.10.61;dbname=web-project;charset=utf8', 'root', '123456789');
    return $db;
}

function ifSessionExit()
{
    if (isset($_SESSION['id'])) {
        header("Location: index.php");
    }
}

function ifNoSessionExit()
{
    if (!isset($_SESSION['id'])) {
        header("Location: index.php?login");
    }
}

function isStudentSession()
{
    if (strtolower($_SESSION['role']) === 'etudiant') {
        return true;
    }
    return false;
}

function isPilotSession()
{
    if (strtolower($_SESSION['role']) === 'pilote') {
        return true;
    }
    return false;
}

function isAdminSession()
{
    if (strtolower($_SESSION['role']) === 'admin') {
        return true;
    }
    return false;
}
