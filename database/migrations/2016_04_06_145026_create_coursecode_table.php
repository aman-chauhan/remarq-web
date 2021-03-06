<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursecodeTable extends Migration
{
	public function up()
	{
		Schema::create('coursecode', function(Blueprint $table) {
			$table->increments('id');
			$table->string('c_code');
			$table->string('c_name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('coursecode');
	}
}
