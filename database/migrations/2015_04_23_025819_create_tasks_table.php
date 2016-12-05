<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\SoftDeletes;

class CreateTasksTable extends Migration {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('publisher', 10)->comment('发布人');
			$table->string('publisher_id', 10)->comment('发布人id');
			$table->dateTime('publish_time')->comment('发布人时间');
			$table->string('theme', 30)->comment('主题');
			$table->string('location', 30)->comment('地点');
			$table->dateTime('start_time')->comment('开工时间');
			$table->tinyInteger('need_amount')->unsigned()->comment('需要人数');
			$table->tinyInteger('accepted_amount')->unsigned()->comment('已接人数');
			$table->decimal('add_hour', 2, 1)->unsigned()->comment('可加时间');
			$table->string('content', 100)->comment('任务内容');
			// $table->mediumText('description');
			$table->enum('status', ['PUBLISHED','ACCEPTED','FULL','DONE','OVERTIME'])->default('PUBLISHED')->comment('任务状态');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
