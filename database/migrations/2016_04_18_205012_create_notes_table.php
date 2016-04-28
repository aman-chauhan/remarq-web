<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
	public function up()
	{
		Schema::create('notes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('course_id');
			$table->date('notedate');
			$table->text('title');
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('notes');
	}
}
