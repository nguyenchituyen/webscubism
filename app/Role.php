<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'dtb_roles';

    public function users()
    {
        return $this->belongsToMany('App\User', 'dtb_user_roles', 'role_action_id', 'user_id');
    }

    public function dtb_roles_action()
    {
        return $this->hasMany('App\RoleAction', 'role_id');
    }
}

