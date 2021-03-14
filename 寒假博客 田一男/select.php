<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=php;", "root", "123456");



    $keywords = $_GET['keywords'];
    $keywords = isset($_GET['keywords']) ? trim($_GET['keywords']) : '';
    $sql = "SELECT * from msg where content Like '%{$keywords}%'";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue('keywords', '%' . $keywords . '%', PDO::PARAM_STR);
    $res = $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("数据库连接失败" . $e->getMessage());
}

// if ($keywords) {
//     echo '<h3>查询关键字为：<font style="color:red;">' . $keywords . '</font></h3>';
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-样式/css/bootstrap.css">
    <title>查询</title>
    <style>
       body {
        background-image: url(./img/8.jpg);
        background-position: center 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
       }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">查询</h1>
            <p class="lead">做的不是很好</p>
        </div>
        <div class='row'>
            <div class='col-12'>
                <?php
                foreach ($row as $key => $msg) {
                ?>
                    <!-- <div class='border rounded p-2 mb-2'> -->
                    <div class="jumbotron" style="padding: 2%;">
                        <div class='text-primary'><?php echo $msg['username']; ?></div>
                        <div><?php echo $msg['content']; ?></div>
                        <div style="float: right;"><?php echo $msg['time']; ?></div>
                        <!-- </br><div style="float: right;"><?php echo $msg['id']; ?></div> -->
                        <a href="del.php?id=<?= $msg['id'] ?>" onclick="return confirm('是否要删除此条信息?')">删除</a>
                        <a href="update.php?id=<?= $msg['id'] ?>" onclick="return confirm('是否要编辑此条信息?')">编辑</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <a href="index0.php">
            <p><input type="submit" value="返回首页" class='btn btn-primary'></p>
        </a>

    </div>
</body>

</html>