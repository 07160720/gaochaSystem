<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\PhpStudy\PHPTutorial\WWW\agaocha\public/../application/admin\view\login\login.htm";i:1533900334;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>后台登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
</head>
<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>

                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="code" name="code" style="margin:10px 0;width:80px;float:left;" type="text">
                    <img  style="float:left; cursor:pointer;" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
                </div>

                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
        </form>
    </div>
    <script src="__PUBLIC__/style/jquery_002.js"></script>
</body>
</html>