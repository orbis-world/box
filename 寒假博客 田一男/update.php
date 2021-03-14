<?php
    include('db.php');

    $pdo = new PDO('mysql:dbname=php', 'root', '123456');

    $id = $_GET['id'];
    
    $sql = "SELECT * from msg where id = $id";
    $stmt = $pdo->query($sql);
    if ($stmt->rowCount() > 0){
        $msg = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    else{
        die("没有要修改的数据");
    }
    // $sql_update = $pdo->prepare("UPDATE msg set username = new_username, content = new_content where id = $id ");
    // $sql_update -> execute(['id'=>1]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改</title>
    <link rel="stylesheet" href="../bootstrap-样式/css/bootstrap.css">
    <style>
       body {
        background-image: url(./img/6.jpg);
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
            <h1 class="display-4">我的留言板</h1>
            <p class="lead">修改</p>
        </div>
        <form  action="reupdate.php?action=update" method='POST'>
          <input type="hidden" name = "id" value = "<?php echo $msg['id']?>">
            <div class='row'>
                <div class='col-12' >
                    <div class="form-group" style="height: 100px;">
                        <input name='content' class="form-control" rows='4' value="<?php echo $msg['content']?>" style="height:100%;"/>
                    </div>
                </div>
                <div class='col-3'>
                    <div class="form-group">
                        <input name='username' class='form-control' type='text' value="<?php echo $msg['username']?>"/>
                    </div>
                </div>
                <div class='col-9 d-flex'>
                    <div class="form-group ml-auto">
                        <input class='btn btn-primary' type='submit' value='修改' />
                    </div>
                </div>
            </div>
        </form>
    </div>

</html>