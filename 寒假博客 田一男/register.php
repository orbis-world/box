
<!DOCTYPE html>
<html>
 <head>
 <title>php.cn</title>
 <meta charset="utf-8" />
 <style>
         .box{
            width:350px;
            height:160px;
            background:#f0f0f0;
            margin-left: auto;
            margin-right: auto;
            margin-top: 15%;
            border-radius: 20px;
         }

         body {
        background-image: url(./img/7.jpg);
        background-position: center 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
       }
    </style>
    <link rel="stylesheet" href="../bootstrap-样式/css/bootstrap.css">
 </head>
 <body>
     <!-- 注册界面  register.php-->
      <div class="box">
        <form action="regcheck.php" method="post"> 
            <table>
                <tr>
                    <td style="text-align:right;">用户名：</td>
                    <td><input type="text" name="username" placeholder="请输入用户名" maxLength="8" class="form-control"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;" placeholder="请输入密码">密 码：</td>
                    <td><input type="password" name="userpwd"  maxLength="8" class="form-control" placeholder="password"/></td>
                </tr>
                <tr>
                    <td style="text-align:right;">确认密码：</td>
                    <td><input type="password" name="confirm"  maxLength="8" class="form-control" placeholder="password"/></td>
                </tr>
                <tr>
                    <td colspa="2" style="text-align:right;"><input type="Submit" name="Submit" value="注册" class="btn btn-primary"/></td>
                </tr>
             </table>
        </form>
    </div>   
 </body>
</html>
