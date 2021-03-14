<?php
// 定义数据库里的列名，对应index0.php中的内容
$content = $_POST['content'];
$username = $_POST['username'];

// var_dump($content, $username);

if (trim($content) == '' or trim($username) == '') {
    echo '用户名，内容不能为空';
    exit;
}

if ($username == 'admin' || $username == 'root' || $username == '领导人') {
    echo '用户名包含敏感词';
    exit;
}



//链接数据库
include('db.php');

//往数据库里添加数据
$sql = "insert into msg (username, content) values ('{$username}','{$content}')";

$db->write($sql);

//回到首页
header('location: index0.php');
