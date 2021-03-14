<?php
// include('db.php');
try{
    $pdo = new PDO("mysql:host=localhost;dbname=php;", "root", "123456");
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}


switch($_GET['action']){
    case"update";
    $id = $_POST['id'];
    $username = $_POST['username'];
    $content = $_POST['content'];

    $sql = "UPDATE msg set username = '{$username}', content = '{$content}' where id = $id";
    $rw = $pdo->exec($sql);
    if($rw > 0 ){
        echo "<script>alert('修改成功'); window.location= 'index0.php'</script>";
    }
    else{
        echo "<script.alert('修改失败'); window.location= 'update.php';</script>";
    }
    break;
}