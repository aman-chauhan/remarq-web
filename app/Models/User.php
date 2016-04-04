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
                return $this->getName() ?: $this->email;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function getAvatarURL()
        {
                return "https://www.gravatar.com/avatar/{{ md5($this->email) }}";
        }
}
