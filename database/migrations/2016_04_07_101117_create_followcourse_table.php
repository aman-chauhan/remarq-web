<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowcourseTable extends Migration
{
	public function up()
	{
		Schema::create('followcourse', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('course_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('followcourse');
	}
}
