<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function guru()
    {
        return $this->hasOne(Guru::class,'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function role($role)
    {
        $roles = collect((array) $role)->map(function ($role) {
            if ($role instanceof Role) {
                return $role->alias;
            }

            return $role;
        });

        return $this->roles->whereIn('alias', $roles)->count() > 0 ? true : false;
    }
}
