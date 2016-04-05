<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowstudentTable extends Migration
{
        public function up()
        {
                Schema::create('followstudent', function(Blueprint $table) {
                        $table->increments('id');
                        $table->integer('user_id');
                        $table->integer('follow_id');
                        $table->timestamps();
                });
        }

        public function down()
        {
                Schema::drop('followstudent');
        }
}
