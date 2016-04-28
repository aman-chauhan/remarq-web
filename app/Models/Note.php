<?php

namespace Remarq\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	protected $table='notes';

	protected $fillable=[
		'user_id',
		'course_id',
		'notedate',
		'title',
		'content'
	];

	public function writtenBy()
	{
		return $this->belongsTo('Remarq\Models\User', 'user_id');
	}

	public function nameofWriter()
	{
		return User::where('id', $this->user_id)->first()->getName();
	}

	public function emailofWriter()
	{
		return User::where('id', $this->user_id)->first()->getEmail();
	}

	public function coursecodeofNote()
	{
		return Course::where('id',$this->course_id)->first()->getCourseCode();
	}
}
