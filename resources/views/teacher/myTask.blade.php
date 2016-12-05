
                @for($i=0;$i< count($tasks);$i++)
                    @if($i%2 == 0)
                    <div class="row" style="margin-bottom:15px;">
                    @endif
                        <div class="col-md-6">
                            <div class="col-md-offset-<?php echo 2-$i%2; ?> col-md-9" style="background:#fee;">
                                <p>{{$tasks[$i]->publisher}} &nbsp; {{$tasks[$i]->theme}} &nbsp; {{$tasks[$i]->start_time}}</p>
                                <p>地点：{{$tasks[$i]->location}} &nbsp; 可加时间：{{$tasks[$i]->add_hour}}Hour &nbsp; 需要：{{$tasks[$i]->need_amount}}人</p>
                                <p><button class="btn btn-sm btn-primary">接受任务</button></p>
                            </div>
                        </div>
                    @if($i%2 == 1)
                    </div>
                    @endif
                @endfor
                
<div style="text-align: center;"><?php echo $tasks->render() ?></div>

<script type="text/javascript" src="{{asset('/js/loadMyTasks.js')}}"></script>
