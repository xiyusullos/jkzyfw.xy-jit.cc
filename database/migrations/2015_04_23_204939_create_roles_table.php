<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\SoftDeletes;

class CreateRolesTable extends Migration {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->comment('用户id');
			$table->enum('role', ['STUDENT','TEACHER']);
			$table->enum('role_zh', [
					'团支书',
					'班长',
					'副班长',
					'学习委员',
					'文艺委员',
					'体育委员',
					'组织委员',
					'宣传委员',
					'社长',
					'副社长',
					'辅导员',
					'班主任',
					'院长',
					'副院长',
					'社团指导老师'
				])->comment('角色');
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
		Schema::drop('roles');
	}

}
