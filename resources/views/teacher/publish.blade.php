@extends('default')

@section('main')

<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}">
<script type="text/javascript" src="{{ asset('datetimepicker/jquery.datetimepicker.js') }}"></script>
<script type="text/javascript">
    $(function(){
        $('.datetimepicker').datetimepicker();
    });    
</script>

<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">发布任务</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        @if($errors->first('responseStatus'))
                        <div class="alert alert-success">
                            <ul>
                                @foreach ($errors->get('responseConte') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    @endif

                    <form action="{{ url('/tasks') }}" method="post" class="form-horizontal" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="theme">任务主题</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="theme" value="{{ old('theme') }}" placeholder="请输入任务主题" id="theme">
                            </div>
                            <span class="col-sm-3 text-danger">{{$errors->first('theme')}}</span>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="location">工作地点</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="请输入工作地点" id="location">
                            </div>
                            <span class="col-sm-3 text-danger">{{$errors->first('location')}}</span>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="start_time">开工时间</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control datetimepicker" name="start_time" value="{{ old('start_time') }}" placeholder="请输入开工时间" id="start_time" autocomplete="off">
                            </div>
                            <span class="col-sm-3 text-danger">{{$errors->first('start_time')}}</span>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="need_amount">需要人数</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="need_amount" value="{{ old('need_amount') }}" placeholder="请输入需要人数" id="need_amount">
                            </div>
                            <span class="col-sm-3 text-danger">{{$errors->first('need_amount')}}</span>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="add_hour">可加时间</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="add_hour" value="{{ old('add_hour') }}" placeholder="请输入可加时间" id="add_hour">
                            </div>
                            <span class="col-sm-3 text-danger">{{$errors->first('add_hour')}}</span>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="content">工作内容</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" placeholder="请输入工作内容" id="content" name="content" cols="50" rows="10"></textarea>
                            </div>
                            <span class="col-sm-3 text-danger">{{$errors->first('content')}}</span>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit"  class="btn btn-default"  value="发布" />
                                <input type="reset"  class="btn btn-default"  value="重置" />
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop