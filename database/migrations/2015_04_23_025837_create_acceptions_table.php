<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\SoftDeletes;

class CreateAcceptionsTable extends Migration {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acceptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('task_id');
			$table->string('acceptor', 10);
			$table->integer('department_id');
			$table->integer('class_id');
			$table->dateTime('accept_time');
			$table->dateTime('finish_time');
			$table->char('status', 1)->default(0);
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
		Schema::drop('acceptions');
	}

}
