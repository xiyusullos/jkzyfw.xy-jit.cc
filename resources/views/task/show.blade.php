@extends('default')

@section('main')
<div class="container-fluid">
    <form method="POST" action="http://xychina.xyz/modify" accept-charset="UTF-8" class="form-horizontal" role="form">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="publisher">发布人</label>
        <div class="col-sm-7"><div class="well well-sm">{{$publisher}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="publish_time">发布时间</label>
        <div class="col-sm-7"><div class="well well-sm">{{$publish_time}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="theme">任务主题</label>
        <div class="col-sm-7"><div class="well well-sm">{{$theme}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="location">工作地点</label>
        <div class="col-sm-7"><div class="well well-sm">{{$location}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="start_time">开工时间</label>
        <div class="col-sm-7"><div class="well well-sm">{{$start_time}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="need_amount">需要人数</label>
        <div class="col-sm-7"><div class="well well-sm">{{$need_amount}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <!-- <div class="form-group">
        <label class="col-sm-2 control-label" for="accepted_amount">已接人数</label>
        <div class="col-sm-7"><div class="well well-sm"></div></div>
        <span class="col-sm-3 text-danger"></span>
    </div> -->
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="add_hour">可加时间</label>
        <div class="col-sm-7"><div class="well well-sm">{{$add_hour}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="content">工作内容</label>
        <div class="col-sm-7"><div class="well well-sm">{{$content}}</div></div>
        <span class="col-sm-3 text-danger"></span>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-primary" href="/modify">后退</a>
        </div>
    </div>
</div>
@stop