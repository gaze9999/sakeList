<?php
session_start();

if (!isset($_SESSION['usrName'])) {
    session_destroy();
    header("Refresh: 3; url=./index.pho");
    echo "3秒後返回登入前頁面";
    exit();
}
?>