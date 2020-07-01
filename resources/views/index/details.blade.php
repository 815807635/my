<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Document</title>
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
            <span>blog</span>
            <img src="../res/img/logo.png">
        </a>
    </h1>
    <div class="nav">
        <a href="/">首页</a>
    </div>
    <ul class="layui-nav header-down-nav">
        <li class="layui-nav-item"><a href="/article" class="active">文章</a></li>
    </ul>
    <p class="welcome-text">
        欢迎来到<span class="name">小明</span>的博客~
    </p>
</div>
<div class="content whisper-content leacots-content details-content">

    <div class="article-cont">
        <div class="title">
            <h3>{{$article->title}}</h3>
            <p class="cont-info"><span class="data">{{$article->created_at}}</span><span class="types">散文札记</span></p>
        </div>
        <p>{{$article->content}}</p>

    </div>
    <script type="text/html" id="laytplCont">

  </script>


</div>
</div>
<script type="text/javascript" src="../res/layui/layui.js"></script>

</body>
</html>
