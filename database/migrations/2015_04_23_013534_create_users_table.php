<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\SoftDeletes;

class CreateUsersTable extends Migration {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("username", 10)->unique()->commet('账号');
			$table->string("password")->commet('密码');
			$table->enum('job', ['STUDENT', 'TEACHER']);
			$table->string("name", 20)->default(NULL)->commet('姓名');
			$table->date("birthday")->default(NULL)->commet('出生日期');
			$table->enum("gender", ['未知', '男', '女'])->default('未知')->commet('性别');
			$table->string("phone", 11)->default(NULL)->commet('手机号');
			$table->string("email", 50)->default(NULL)->commet('邮箱');
			$table->timestamps();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
