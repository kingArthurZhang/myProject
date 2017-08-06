<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="__PUBLIC__/bs/css/bootstrap.min.css">
    <script src="__PUBLIC__/bs/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bs/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/css/index.css">
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="__ROOT__/index.php/index/index">Home Page</a>
            </div>
        </nav>

            <div class="line"></div>

        <div class="login">
            <form method="post" action="__URL__/check">
                <div class="form-group">
                    <label for="__URL__/check" method='post'>User Name:</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="Password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="">Verify Code:</label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fcode">
                        </div>
                        <div class="col-md-2">
                            <img class="verify" src="__URL__/verify" onclick="this.src='__URL__/verify/rand='+Math.random()">
                        </div>
                    </div>
                        <div class="form-group sign">
                            <input type="submit" value="Sign in" class="btn btn-primary">
                            <input type="reset" value="Cancel" class="btn btn-danger">
                        </div>
            </form>
        </div>
    </div>
</body>
</html>