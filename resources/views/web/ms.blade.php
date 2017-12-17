<html>
<head>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script>
        document.write('<script src="{{asset('js/isStart.js')}}'+'?v='+Math.random()+'"><\/script>');
    </script>
    <script>
        document.write('<script src="{{asset('js/hasGoods.js')}}'+'?v='+Math.random()+'"><\/script>');
    </script>
</head>
<body>
<button type="button" onclick="ms()">秒了个杀</button>
</body>
<script>
    $(function () {

    });
    function ms() {
        if (!isStart){
            alert('活动还没开始');
            return;
        }
        if (!hasGood){
            alert('没有库存了');
            return;
        }
        $.post('',,function () {

        });
    }
</script>
</html>