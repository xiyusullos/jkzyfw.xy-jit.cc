@extends('default')

@section('main')

<div class="container">
<?php
use App\User;
if (Auth::check()) {
// var_dump(Auth::user()->roles()->where('role','STUDENT')->first()->role);

}
  ?>
    <div id="task-acceptable" class="panel panel">
        <div class="panel-heading">
            <p>ACCEPTABLE TASK 可接受任务</p>                
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4" style="background:#fee;">
                            <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                            <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                            <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="task-accepted" class="panel panel">
        <div class="panel-heading">
            <p>ACCEPTED TASK 已接受任务</p>              
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
                <div class="col-sm-4" style="background:#fee;">
                    <p>洪蕾：打扫机房 12:30PM 2015/04/12</p>
                    <p>地点：工科楼A510 可加时间：2Hour 需要：3人</p>
                    <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="service-loving" class="panel panel">
        <div class="panel-heading">
            <p>ACCEPTABLE TASK 可接受任务</p>                
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <img class="col-sm-6" src="{{ asset('/img/head.png') }}">
                        <div class="col-sm-6"  style="backgroud:green;">
                            <p>12软件工程 顾莹莹</p>
                            <p>总时间：30 Hours</p>
                            <p>总次数：20次</p>
                            <p>已加学分：2分</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <img class="col-sm-6" src="{{ asset('/img/head.png') }}">
                        <div class="col-sm-6"  style="backgroud:green;">
                            <p>12软件工程 顾莹莹</p>
                            <p>总时间：30 Hours</p>
                            <p>总次数：20次</p>
                            <p>已加学分：2分</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <img class="col-sm-6" src="{{ asset('/img/head.png') }}">
                        <div class="col-sm-6"  style="backgroud:green;">
                            <p>12软件工程 顾莹莹</p>
                            <p>总时间：30 Hours</p>
                            <p>总次数：20次</p>
                            <p>已加学分：2分</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <img class="col-sm-6" src="{{ asset('/img/head.png') }}">
                        <div class="col-sm-6"  style="backgroud:green;">
                            <p>12软件工程 顾莹莹</p>
                            <p>总时间：30 Hours</p>
                            <p>总次数：20次</p>
                            <p>已加学分：2分</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <img class="col-sm-6" src="{{ asset('/img/head.png') }}">
                        <div class="col-sm-6"  style="backgroud:green;">
                            <p>12软件工程 顾莹莹</p>
                            <p>总时间：30 Hours</p>
                            <p>总次数：20次</p>
                            <p>已加学分：2分</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <img class="col-sm-6" src="{{ asset('/img/head.png') }}">
                        <div class="col-sm-6"  style="backgroud:green;">
                            <p>12软件工程 顾莹莹</p>
                            <p>总时间：30 Hours</p>
                            <p>总次数：20次</p>
                            <p>已加学分：2分</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
