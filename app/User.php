<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table = 'dtb_users';
    public function roles()
    {
        return $this->belongsToMany('App\RoleAction', 'dtb_user_roles', 'user_id', 'role_action_id');
    }

    public function hasAnyRole($roles)
    {
        if ($this->hasRole($roles)) {
            return true;
        }
        return false;
    }

    public function hasRole($roles)
    {
        if ($this->roles()->where('action', $roles['action'])->where('controller',$roles['controller'])->first()) {
            return true;
        }
        return false;
    }
}
