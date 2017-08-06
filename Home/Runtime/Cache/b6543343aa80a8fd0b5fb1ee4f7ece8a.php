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
        <!-- NavBar -->
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">Arthur's World</a>
            </div>
            <nav class="menu">

            </nav>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="__ROOT__/admin.php/Index/index">Manage Content<span class="sr-only">(current)</span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="__ROOT__/admin.php/Login/index">Log in<span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </nav>

            <div class="line"></div>

        <!-- SlideShow -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval='2000'>
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="../Public/images/a.jpg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="../Public/images/b.jpg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="../Public/images/c.jpg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="../Public/images/d.jpg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="../Public/images/e.jpg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div class="line"></div>

            <!-- Display -->
            <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="panel panel-primary">
                  <div class="panel-heading">
                      <h4><?php echo ($row['title']); ?></h4>
                  </div>
                  <div class="panel-body">
                      <?php echo (htmlspecialchars_decode($row['content'])); ?>
                  </div>
                  <div class="panel-footer">
                      <span class="'label label-primary">Author:</span><span><?php echo ($row['username']); ?></span>
                      <span class="'label label-danger">Last Edited Time:</span><span><?php echo (date('Y-m-d H:i:s',$row['time'])); ?></span>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>


            <div class="footer">
                <span class="pull-left">www.kingArthurZhang.com</span>
                <span class="pull-right">Talk is cheap,show me the code.</span>
            </div>
    </div>
</body>
</html>