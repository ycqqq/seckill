<?php
/**
 * Created by PhpStorm.
 * User: qyc
 * Date: 2017/11/14
 * Time: 下午11:35
 */
?>
        <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>后台管理</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header navbar-brand">
                YCQQQ
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">主页</a></li>
                    <li><a href="#">活动</a></li>
                    <li><a href="#">商品</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar-fixed-top/">登录</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h2>秒了个杀</h2>
        <p>&emsp;&emsp;这是一个秒杀网站，包括前台秒杀页、后台管理页，使用到静态化、redis等技术提升系统性能，单机支持百万内次秒杀，同时也保障秒杀业务的可用性，处理了脏数据产生和超卖现象。.</p>

        <img width="400" height="400" src="{{asset('img/july.jpg')}}" alt="july" class="img-rounded">
        <p style="margin-top: 20px;">
            <a class="btn btn-lg btn-primary" href="http://www.jianshu.com/u/08a29555bdd3" role="button"
               target="_Blank">我的简书 &raquo;
            </a>
        </p>
    </div>
</div>
</body>
</html>
