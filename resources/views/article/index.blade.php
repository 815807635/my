<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #price{
            color: #ff0000;
            font-size: 28px;
        }
    </style>
</head>
<body>
<div id="price"></div>
</body>
</html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.js"></script>
<script type="text/javascript">
    $.ajax({
        url: 'http://my.test/api/articles',
        type: 'GET',     // 请求类型，常用的有 GET 和 POST
        success: function(data) { // 接口调用成功回调函数
            // data 为服务器返回的数据
            $('#price').html(data.article[0].title)
            var article = data;
        }
    })

</script>
