<!DOCTYPE html>
<html>

<head>
	<title>php.cn</title>
	<meta charset="utf-8" />
	<style>
		.box {
			
			width: 400px;
			height: 180px;
			background: #f0f0f0;
			margin-left: 36%;
			margin-top: 15%;
			border-radius: 20px;
		}

		.table {
			margin-top: 10%;
		}
		
		body {
        background-image: url(./img/1.jpg);
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
	<!-- 登录界面 login.php -->
	<div class="box">
		<form action="logincheck.php" method="post">
			<table class="table">
				<tr>
					<td style="text-align:right;" >用户名：</td>
					<td><input type="text" name="username" placeholder="请输入用户名" maxLength="6"  class="form-control"/></td>
				</tr>
				<tr>
					<td style="text-align:right;">密 码：</td>
					<td><input type="password" name="userpwd" maxLength="6" class="form-control"  placeholder="Password"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="登陆" class="btn btn-primary"/> </td>
					<td><a href="register.php" class="btn btn-primary">注册</a></td>
				</tr>
			</table>
		</form>
	</div>
	
</body>

</html>