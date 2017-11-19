@include('admin/header')
<link href="{{asset('css/sign.css')}}" rel="stylesheet">
<div class="container">
    <form class="form-signin">
        <label for="inputEmail" class="sr-only">用户名:</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="请输入用户名" required>
        <label for="inputPassword" class="sr-only">密 码：</label>
        <input type="password" name="password" id="password" class="form-control margin-top-5px" placeholder="请输入密码"
               required>

        <button class="btn btn-lg btn-primary btn-block margin-top-10px" type="button" onclick="login()">登&emsp;录
        </button>
    </form>
</div>
<script type="text/javascript">
    function login() {
        var username = $("#username").val();
        var password = $("#password").val();
        if (!username || !password) {
            notify.danger('请输入用户名和密码~');
        }
        $.ajax({
            type: "post",
            url: "/admin/login",
            data: {
                username: username,
                password: password
            },
            beforeSend: function (request) {
                request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (data) {
                if (data.code == 200) {
                    notify.success('登录成功');
                    location.href = '/admin';
                } else {
                    notify.danger(data.msg);
                }
            }
        });
    }
</script>
@include('admin/footer')
