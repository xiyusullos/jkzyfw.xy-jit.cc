<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth, Input, Validator;
use App\Teacher;

class TeacherController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $teacher = Teacher::where('uid', Auth::user()->uid)->first();
        var_dump($teacher->toArray());
        return view('teacher.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
    // 发布任务
    public function publish(){
        // if ('GET' === Input::server('REQUEST_METHOD')) {
        //     // return redirect()->route('/tasks/create');
        //     return view('teacher.publish');
        // }elseif ('POST' === Input::server('REQUEST_METHOD')) {
        //     $validator = $this->_getPublishValidator();
        //     if ($validator->passes()) {
        //         redirect()->route('tasks.create');
        //         // $task = new Task;
        //         // $task->publisher_id = Auth::user()->uid;
        //         // $task->publisher = Auth::user()->name;
        //         // $task->publish_time = date('Y-m-d H:i:s');
        //         // $task->theme = Input::get('theme');
        //         // $task->location = Input::get('location');
        //         // $task->start_time = Input::get('start_time');
        //         // $task->need_amount = Input::get('need_amount');
        //         // $task->add_hour = Input::get('add_hour');
        //         // $task->content = Input::get('content');
        //         // $task->save();
        //         echo '<script>alert("任务发布成功！")</script>';
        //     }else{
        //         return redirect()->back()
        //             ->withInput()
        //             ->withErrors($validator->messages());
        //     }
        //     return redirect()->route('/teachers/publish');
        // }
        // return redirect()->route('tasks.create');
        return view('task._form');

    }

    protected function _getPublishValidator(){
        return Validator::make(Input::all(), [
                'theme' => 'required',
                'location' => 'required',
                'start_time' => 'required',
                'need_amount' => 'required',
                'add_hour' => 'required',
                'content' => 'required',
            ]);
    }

    protected function _getPublishCredentials(){
        return [
            'theme' => Input::get('theme'),
            'location' => Input::get('location'),
            'start_time' => Input::get('start_time'),
            'need_amount' => Input::get('need_amount'),
            'add_hour' => Input::get('add_hour'),
            'content' => Input::get('content'),
        ];
    }
}
