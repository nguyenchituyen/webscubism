<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ACL_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $query = 'select * from users';
        $users = User::query($query)->get();

        return view('roles.role_action_index', ['title' => 'Quản trị chức năng', 'users' => $users]);
    }

    function checkPermission()
    {
        return view('permission');
    }

    public function edit($id_user)
    {
        $roles = DB::table('dtb_roles')->get();
        $rolesActions = DB::table('dtb_roles_action')->get();
        $userRoles = DB::table('dtb_user_roles')->where('user_id', $id_user)->get();
        $renderArray = [
            'roles' => $roles,
            'userRoles' => $userRoles,
            'rolesActions' => $rolesActions,
            'username' => urldecode($_GET['username']),
            'userId' => $id_user,
        ];

        return view('roles.role_action_edit', $renderArray)->with('success', 'The edit successful');
    }

    public function store(Request $request)
    {
        DB::table('dtb_user_roles')->where('user_id', $request['user_id'])->delete();
        foreach ($request['roleActions'] as $roleAction) {
            $actionId = explode(',', $roleAction)[1];
            $roleId = explode(',', $roleAction)[0];
            DB::table('dtb_user_roles')->insert([
                'user_id' => $request['user_id'],
                'role_id' => $roleId,
                'role_action_id' => $actionId,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        return redirect()->route('acl.index')->with('success', 'The grant successful');
    }

    public function destroy($id)
    {
        $role = Role::findOrfail($id);
        $role->delete();

        return redirect('role')->with('success', 'The delete successful');
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $roles = Role::where('name', 'like', '%' . $name . '%')->paginate(5);

        return view('roles.role_action_index', compact('roles'));
    }

}