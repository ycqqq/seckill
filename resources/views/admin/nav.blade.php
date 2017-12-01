<?php
/**
 * Created by PhpStorm.
 * User: qyc
 * Date: 2017/11/19
 * Time: 下午8:29
 */
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header navbar-brand">
            YCQQQ
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('admin')?'active':''}}"><a href="{{url('/admin')}}">主页</a></li>
                <li class="{{Request::is('admin/goods')?'active':''}}"><a href="{{url('/admin/goods')}}">商品</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if($name)
                    <li><a>{{$name}}</a></li>
                    <li><a href="{{url('/admin/logout')}}">退出</a></li>
                @else
                    <li><a href="{{url('/login')}}">登录</a></li>
                    <li><a href="{{url('/sign')}}">注册</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
