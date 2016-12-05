<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jkService</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-3.3.1.min.js') }}"></script>

    <!-- Fonts -->
    <!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body { padding-top: 70px; }
        .navbar-search .search-query {
            padding-left: 39px !important;
        }
    </style>
</head>
<body>
    <header role="banner">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-zyfw">
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{ asset('/img/logo.png') }}" alt="金科志愿服务平台" height="28"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-zyfw">
                @if (Auth::check())
                    @if (Auth::user()->job === 'STUDENT')
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-xs active" href="/">首页</a></li>
                        <li><a class="btn btn-xs" href="#">最新可接任务</a></li>
                        <li><a class="btn btn-xs" href="#">最新已被接受任务</a></li>
                    </ul>
                    @elseif (Auth::user()->job === 'TEACHER')
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-xs active" href="/teacher">首页</a></li>
                        <li><a class="btn btn-xs" href="/teacher/publish">发布任务</a></li>
                        <li><a class="btn btn-xs" href="/teacher/myTasks">我的任务</a></li>
                        <li><a class="btn btn-xs" href="/teacher/">已被接受任务</a></li>
                        <li><a class="btn btn-xs" href="/teacher/">已被完成任务</a></li>
                        <li><a class="btn btn-xs" href="/teacher/transform">导出Excel</a></li>
                        <li><a class="btn btn-xs" href="/teacher/aboutMe/{{Auth::user()->id}}">关于我</a></li>
                    </ul>
                    @endif
                @else
                    <ul class="nav navbar-nav">
                        <li class="btn btn-xs active"><a href="/">首页</a></li>
                        <li><a class="btn btn-xs" href="#">最新可接任务</a></li>
                        <li><a class="btn btn-xs" href="#">最新已被接受任务</a></li>
                    </ul>
                @endif

                    <form method="post" action="#" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="搜索" aria-describedby="basic-addon2">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                                <!-- <span class="input-group-btn">
                                    <button class="btn" href="#">登录</button>
                                </span> -->
                                <!-- <a class="input-group-addon btn glyphicon glyphicon-search" id="basic-addon2"></a> -->
                                <!-- <a class="btn glyphicon glyphicon-search"></a> -->
                            </div>
                        </div>
                    </form>

                    <ul class="nav navbar-nav">
                    @if (Auth::check())
                        <li><a href="/user/info">{{ Auth::user()->uid }}</a></li>
                        <li><a class="btn btn-xs" href="/logout">退出</a></li>
                    @else
                        <li><a class="btn btn-xs" href="/login">登录</a></li>
                    @endif
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

    </header>

    @yield('main')

    <footer role="contentinfo" style="text-align:center;">
        <div class="container">
            <p><small>Copyright © 2014 - 2015, All Rights Reserved By 金陵科技学院 软件工程学院 12软件工程（服务外包）3 徐勇 </small></p>
            <p><small>版权所有：金陵科技学院</small></p>
        </div>
    </footer>

</body>
</html>
