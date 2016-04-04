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
}
