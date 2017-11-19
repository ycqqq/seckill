<?php
/**
 * Created by PhpStorm.
 * User: qyc
 * Date: 2017/11/19
 * Time: 下午7:53
 */
?>
@include('admin/header')
<link href="{{asset('css/sign.css')}}" rel="stylesheet">
<div class="container">
    <form class="form-signin">
        <label for="inputEmail" class="sr-only">用户名:</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="请输入用户名" required>
        <label for="inputPassword" class="sr-only">密 码：</label>
        <input type="password" name="password" id="password" class="form-control margin-top-5px" placeholder="请输入密码"
               required>
        <label for="inputPassword" class="sr-only">确认密码：</label>
        <input type="password" name="repassword" id="repassword" class="form-control margin-top-5px"
               placeholder="请确认密码"
               required>
        <label for="name" class="sr-only">昵 称：</label>
        <input type="text" name="name" id="name" class="form-control margin-top-5px"
               placeholder="请输入昵称"
               required>

        <button class="btn btn-lg btn-primary btn-block margin-top-10px" type="button" onclick="sign()">注&emsp;册
        </button>
    </form>
</div>
<script type="text/javascript">
    function sign() {
        var username = $("#username").val();
        var password = $("#password").val();
        var repassword = $("#repassword").val();
        var name = $("#name").val();
        if (!username || !password || !repassword || !name) {
            notify.danger('请输入用户名、密码和昵称~');
            return;
        }
        if (!(/^1[34578]\d{9}$/.test(username))) {
            notify.danger('用户名必须为手机号码');
            return;
        }
        if (password !== repassword) {
            notify.danger('密码输入不一致');
            return;
        }
        $.ajax({
            type: "post",
            url: "/admin/sign",
            data: {
                username: username,
                password: password,
                repassword: repassword,
                name: name
            },
            beforeSend: function (request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (data) {
                if (data.code == 200) {
                    notify.success('注册成功');
                    setTimeout("location.href = '/admin';", 500);
                } else {
                    notify.danger(data.msg);
                }
            }
        });
    }
</script>
@include('admin/footer')
