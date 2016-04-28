<?php

namespace Remarq\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'coursecode';

	protected $fillable = [
		'c_code',
		'c_name',
	];

	public function getCourseID()
	{
		return $this->id;
	}

	public function getCourseCode()
	{
		return $this->c_code;
	}

	public function getCourseName()
	{
		return $this->c_name;
	}

	public function whoFollowThis()
	{
		return $this->belongsToMany('Remarq\Models\User', 'followcourse', 'course_id', 'user_id');
	}
}
