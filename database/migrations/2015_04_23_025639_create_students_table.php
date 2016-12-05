<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\SoftDeletes;

class CreateStudentsTable extends Migration {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("user_id")->unsigned()->comment('用户id');
			$table->integer("class_id")->nullable()->default(null)->comment('班级id');
			$table->integer("department_id")->nullable()->default(null)->comment('学院id');
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
		Schema::drop('students');
	}

}
