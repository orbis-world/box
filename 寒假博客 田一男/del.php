<?php
include('db.php');

$pdo = new PDO('mysql:dbname=php','root','123456');

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM msg WHERE id=$id");
$stmt -> execute(['id'=>1]);
echo '成功更新了';

// 页面跳转，实现方式为javascript
$url = "index0.php";
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";

