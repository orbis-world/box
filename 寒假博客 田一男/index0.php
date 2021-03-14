<?php
include('db.php');

//获取数据总数
$sql = "select count(*) as t from msg";
$total = $db->read($sql)[0]['t'];

//每页显示
$pageNum = 5;
$pageMax = ceil($total / $pageNum);

//计算当前应该显示哪些数据
$page = $_GET['page'] ?? 1;

$offset = ($page - 1) * $pageNum; // 1*5;

$sql = "SELECT * FROM `msg` ORDER BY id DESC LIMIT $offset,5";
$rows = $db->read($sql);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-样式/css/bootstrap.css">
    <title>我的博客</title>
    <style>
       body {
        background-image: url(./img/5.jpg);
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

    <div>
    <a href=""></a>
    </div>
    <div class="container">
        <!-- <div   style="background-image: url(./2.jpg);"> -->
        <div class="jumbotron">
            <h1 class="display-4">我的博客</h1>
            <p class="lead">做的不是很好</p>
        </div>
        <!-- 查询 -->
        <form action="select.php" method="GET">
            <p><input type="text" name="keywords" value="" placeholder="请输入内容" class='form-control'></p>
            <a href="select.php?keywords">
                <p><input type="submit" value="查询" class='btn btn-primary'></p>
            </a>
        </form>

        <form action="save.php" method='POST'>
            <div class='row'>

                <div class='col-12'>
                    <div class="form-group">
                        <textarea name='content' class="form-control" rows='4' placeholder="请输入留言内容"></textarea>
                    </div>
                </div>
                <div class='col-3'>
                    <div class="form-group">
                        <input name='username' class='form-control' type='text' placeholder="请输入留言人" />
                    </div>
                </div>
                <div class='col-9 d-flex'>
                    <div class="form-group ml-auto">
                        <input class='btn btn-primary' type='submit' value='提交' />
                    </div>
                </div>
            </div>
        </form>
        <!-- </div> -->
        <div class='row'>
            <div class='col-12'>
                <?php
                foreach ($rows as $key => $msg) {
                ?>
                    <!-- <div class='border rounded p-2 mb-2'> -->
                        <div class="jumbotron" style="padding: 2%;">
                            <div class='text-primary'><?php echo $msg['username']; ?></div>
                            <div><?php echo $msg['content']; ?></div>
                            <div style="float: right;"><?php echo $msg['time']; ?></div>
                            <!-- </br><div style="float: right;"><?php echo $msg['id']; ?></div> -->
                            <a href="del.php?id=<?= $msg['id'] ?>" onclick="return confirm('是否要删除此条信息?')" >删除</a>
                            <a href="update.php?id=<?= $msg['id'] ?>" onclick="return confirm('是否要编辑此条信息?')">编辑</a>
                        </div>
                    <!-- </div> -->
                <?php
                }
                ?>
            </div>
        </div>

        <div class='row'>
            <div class='col-12'>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pageMax; $i++) : ?>
                            <li class="page-item">
                                <a class="page-link" href="index0.php?page=<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</body>

</html>