<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login</title>

    <link href="<?php echo (PUBLIC_URL); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo (PUBLIC_URL); ?>css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo (PUBLIC_URL); ?>js/html5shiv.js"></script>
    <script src="<?php echo (PUBLIC_URL); ?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="index.html">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">管理员登录</h1>
            <img src="<?php echo (PUBLIC_URL); ?>images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input name="username" type="text" class="form-control" placeholder="用户名" autofocus>
            <input name="password" type="password" class="form-control" placeholder="密码">

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration hidden">
                Not a member yet?
                <a class="" href="registration.html">
                    Signup
                </a>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> 自动登录
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> 忘记密码?</a>
                </span>
            </label>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">忘记密码 ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>请输入您的电子邮件地址以重新设置您的密码。</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                        <button class="btn btn-primary" type="button">提交</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (PUBLIC_URL); ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo (PUBLIC_URL); ?>js/bootstrap.min.js"></script>
<script src="<?php echo (PUBLIC_URL); ?>js/modernizr.min.js"></script>

</body>
</html>