<?php
// if ('' ==Auth::user()->name
//         || '' ==Auth::user()->birthday
//         || '' ==Auth::user()->gender
//         || '' ==Auth::user()->phone
//         || '' ==Auth::user()->email
//         ) {
//         echo '<script>alert("请补全您的个人资料！")</script>';
//         }
?>
@extends('default')

@section('main')

<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}">
<script type="text/javascript" src="{{ asset('datetimepicker/jquery.datetimepicker.js') }}"></script>
<script type="text/javascript">
        $(function(){
                $('.datepicker').datetimepicker({'timepicker':false,format:'Y-m-d'});
        });    
</script>
<?php $user = Auth::user() ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">个人信息</div>
                <div class="panel-body">
                    <form action="/teacher/abotme" method="post" class="form-horizontal" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="username">账号：</label>
                            <div class="col-sm-8" ><p class="form-control">{{$teacher->uid}}</p></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="name">姓名：</label>
                            <div class="col-sm-8"><p class="form-control">{{$teacher->name}}</p></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">性别：</label>
                            <div class="col-sm-8"><p class="form-control">{{$teacher->name}}</p></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="job">出生日期：</label>
                            <div class="col-sm-8"><p class="form-control">{{$teacher->birthday}}</p></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="job">手机号码：</label>
                            <div class="col-sm-8"><p class="form-control">{{$teacher->phone}}</p></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="job">邮箱地址:</label>
                            <div class="col-sm-8"><p class="form-control">{{$teacher->email}}</p></div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                <input class="btn btn-default" type="submit" value="修改个人资料">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop