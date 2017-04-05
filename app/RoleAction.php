<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleAction extends Model
{
    protected $table = 'dtb_roles_action';

    public function users()
    {
        return $this->belongsToMany('App\User', 'dtb_user_roles', 'role_action_id', 'user_id');
    }

    public function dtb_roles()
    {
        return $this->belongsTo('App\Role', 'id');
    }
}
