<?php

namespace Remarq\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
        use Authenticatable;

        protected $table='students';

        protected $fillable = [
                'first_name',
                'last_name',
                'email',
                'password',
        ];

        protected $hidden = [
                'password',
                'remember_token',
        ];

        public function getName()
        {
                if ($this->first_name && $this->last_name)
                {
                        return "{$this->first_name} {$this->last_name}";
                }

                if ($this->first_name)
                {
                        return $this->first_name;
                }

                return $this->email;
        }

        public function getFirstName()
        {
                return $this->first_name;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function whoIFollow()
        {
                return $this->belongsToMany('Remarq\Models\User', 'followstudent', 'user_id', 'follow_id');
        }

        public function whoFollowMe()
        {
                return $this->belongsToMany('Remarq\Models\User', 'followstudent', 'follow_id', 'user_id');
        }

	public function followUser(User $user)
	{
		return $this->whoIFollow()->attach($user->id);
	}

	public function unFollowUser(User $user)
	{
		return $this->whoIFollow()->detach($user->id);
	}

	public function isFollowing(User $user)
	{
		return (bool) $this->whoIFollow->where('id', $user->id)->count();
	}

	public function courseIFollow()
	{
		return $this->belongsToMany('Remarq\Models\Course', 'followcourse', 'user_id', 'course_id');
	}

	public function followCourse(Course $course)
	{
		return $this->courseIFollow()->attach($course->id);
	}

	public function unFollowCourse(Course $course)
	{
		return $this->courseIFollow()->detach($course->id);
	}

	public function isFollowingCourse(Course $course)
	{
		return (bool) $this->courseIFollow->where('id',$course->id)->count();
	}
}
