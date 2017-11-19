<?php
/**
 * Created by PhpStorm.
 * User: qyc
 * Date: 2017/11/17
 * Time: 上午9:11
 */
?>
@include('admin/header')
<div class="container">
    <!-- Static navbar -->
@include('admin.nav')
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
@include('admin/footer')

