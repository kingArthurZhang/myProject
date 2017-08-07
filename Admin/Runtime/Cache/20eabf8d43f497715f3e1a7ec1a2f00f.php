<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="__PUBLIC__/bs/css/bootstrap.min.css">
    <script src="__PUBLIC__/bs/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bs/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/css/index.css">
    <script type="text/javascript" src="__PUBLIC__/kd/kindeditor-all-min.js"></script>
    <script>
        menu='<?php echo ($_GET[menu]); ?>'?'<?php echo ($_GET[menu]); ?>':'story';
    </script>
    <script type="text/javascript" src="../Public/js/index.js"></script>
</head>
<body>
    <div class="container">
                <!-- NavBar -->
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="__ROOT__/admin.php/Index/index">Back Page</a>
            </div>
            <nav class="menu">

            </nav>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="__APP__/Login/logout">Exit<span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </nav>

        <!--Back Page Content-->
        <div class="row" id="rowheight">
            <div class="col-md-2 left">
                <div class="list-group user">
                    <a href="javascript:" class="list-group-item active">Manage Users</a>
                    <a href="__APP__/User/index" class="list-group-item">View Users</a>
                    <a href="__APP__/User/add" class="list-group-item">Add User</a>
                </div>
                 <div class="list-group story">
                    <a href="javascript:" class="list-group-item active">Manage Stories</a>
                    <a href="__APP__/Story/index" class="list-group-item">View Stories</a>
                    <a href="__APP__/Story/add" class="list-group-item">Add Stories</a>
                </div>
            </div>
            <div class="col-md-10 right">
                
                    <div class="jumbotron">
                        <h3>Welcome to Arthur's World!</h3>
                        <p>This is a place for Arthur and Rachel's love story,they fell in love in the Christmas of 2016,and they want to record their stories.</p>
                        <a href="__ROOT__/index.php/Index/index" class="btn btn-primary" target="_blank">Home</a>
                    </div>
                
            </div>
        </div>
    </div>
</body>
</html>