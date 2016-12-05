<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Input, Validator, Auth;
use App\Task;

// use Jenssegers\Date\Date;

class TaskController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		if ('POST' === Input::server('REQUEST_METHOD')) {
			return $this->store();
		}


		// Date::setLocal('zh');

		// $date = new Date($task->start_time);


		// Date::setLocale('zh');

		// echo Date::now()->format('l ? j ? F ? Y ? H:i:s'); // zondag 28 april 2013 21:58:16

		// echo Date::parse('-1 day')->diffForHumans(); // 1 dag geleden

		$tasks = Task::paginate(6);

		if ('t' === Input::get('aj')) {
			return view('teacher.myTask', ['tasks' => $tasks]);
		}

		// foreach ($tasks as $task) {
		// 	$date = new Date($task->start_time);
		// 	$task->start_time = $date->ago();
		// }
		// $tasks->setPath('/teacher/myTaskss');
		return view('task.index',[
			'tasks' => $tasks
		]);
	}

	public function load(){
		$tasks = Task::paginate(6);
		// $tasks->setPath('/teacher/myTaskss');
		return view('task.myTask',[
			'tasks' => $tasks
		]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('task._form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// var_dump(Input::all());
		// var_dump(Auth::user()->username);
		// var_dump(clean(Input::all()));
		$validator = $this->_getTaskValidator();
		if ($validator->passes()) {
		    $task = new Task;
		    $task->publisher_id = Auth::user()->username;
		    $task->publisher = Auth::user()->name;
		    $task->publish_time = date('Y-m-d H:i:s');
		    $task->theme = clean(Input::get('theme'));
		    $task->location = clean(Input::get('location'));
		    $task->start_time = clean(Input::get('start_time'));
		    $task->need_amount = clean(Input::get('need_amount'));
		    $task->add_hour = clean(Input::get('add_hour'));
		    $task->content = clean(Input::get('content'));
		    $task->save();

		    return redirect()->back()
		    	->withErrors([
		    		'responseStatus' => true,
		    		'responseConte' => '发布成功！'
		    	]);
		}else{
		    return redirect()->back()
		        ->withInput()
		        ->withErrors($validator->messages());
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::find($id);

		return view('task.show', [
				'publisher_id' => $task->publisher_id,
				'publisher' => $task->publisher,
				'publish_time' => $task->publish_time,
				'theme' => $task->theme,
				'location' => $task->location,
				'start_time' => $task->start_time,
				'need_amount' => $task->need_amount,
				'add_hour' => $task->add_hour,
				'content' => $task->content,
			]);
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


    protected function _getTaskValidator(){
        return Validator::make(Input::all(), [
                'theme' => 'required',
                'location' => 'required',
                'start_time' => 'required',
                'need_amount' => 'required',
                'add_hour' => 'required',
                'content' => 'required',
            ]);
    }

}
