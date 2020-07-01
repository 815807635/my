<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>blog</title>
    <link rel="stylesheet" type="text/css" href="../res/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="../res/css/main.css">
    <!--加载meta IE兼容文件-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="menu-btn">
        <div class="menu"></div>
    </div>
    <h1 class="logo">
        <a href="/">
            <span>首页</span>
            <img src="../res/img/logo.png">
        </a>
    </h1>
    <div class="nav">
        <a href="/article" class="active">文章</a>
        {{--      <a href="whisper.html">微语</a>--}}
        {{--      <a href="leacots.html">留言</a>--}}
        {{--      <a href="album.html">相册</a>--}}
        {{--      <a href="about.html">关于</a>--}}
    </div>
    <ul class="layui-nav header-down-nav">
        <li class="layui-nav-item"><a href="index.html" class="active">文章</a></li>
        <li class="layui-nav-item"><a href="whisper.html">微语</a></li>
        <li class="layui-nav-item"><a href="leacots.html">留言</a></li>
        <li class="layui-nav-item"><a href="album.html">相册</a></li>
        <li class="layui-nav-item"><a href="about.html">关于</a></li>
    </ul>

</div>


<div class="content">
    <div class="cont w1000">


        @foreach($article as $val)
            <div class="list-item">
                <div class="item">
                    <div class="layui-fluid">
                        <div class="layui-row">
                            <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                                <div class="img"><img src="../res/img/sy_img1.jpg"  alt=""></div>
                            </div>
                            <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                                <div class="item-cont">
                                    <h3>{{$val->title}}
                                        <button class="layui-btn layui-btn-danger new-icon">new</button>
                                    </h3>
                                    <p>{{$val->content}}</p>
                                    <a href="/article/{{$val->id}}" class="go-icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="demo" style="text-align: center;"></div>
    </div>
</div>


<script type="text/javascript" src="../res/layui/layui.js"></script>
<script type="text/javascript">
    layui.config({
        base: '../res/js/util/'
    }).use(['element', 'laypage', 'jquery', 'menu'], function () {
        element = layui.element, laypage = layui.laypage, $ = layui.$, menu = layui.menu;
        laypage.render({
            elem: 'demo'
            , count: 70 //数据总数，从服务端得到
        });
        menu.init();
    })
</script>
</body>
</html>
