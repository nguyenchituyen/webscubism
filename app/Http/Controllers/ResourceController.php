<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Role;
use App\RoleAction;

class ResourceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resources = DB::table('dtb_roles')->join('dtb_roles_action', 'dtb_roles.id', '=',
                'dtb_roles_action.role_id')->orderBy('dtb_roles_action.id', 'DESC')->select('dtb_roles.*',
                'dtb_roles_action.id', 'dtb_roles_action.controller', 'dtb_roles_action.action',
                'dtb_roles_action.type', 'dtb_roles_action.role_id')->paginate(5);

        return view('resources.resource_index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roleNameList = Role::pluck('name', 'id');
        return view('resources.resource_create', compact('roleNameList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'role_action' => [
                'required',
                'max:255',
                'regex:/^([A-Za-z]+\:[A-Za-z]+\:[0-3]+)((\|)([A-Za-z]+\:[A-Za-z]+\:[0-3]+))*$/'
            ]
        ]);

        $arrRoleAction = explode('|', $request->role_action);
        $arrItem = array();
        $i = 0;
        foreach ($arrRoleAction as $value) {
            $dataRoleAction = explode(':', $value);
            $arrItem[$i]['controller'] = $dataRoleAction[0];
            $arrItem[$i]['action'] = $dataRoleAction[1];
            $arrItem[$i]['type'] = $dataRoleAction[2];
            $i++;
        }
        //Insert to dtb_roles_action table
        foreach ($arrItem as $key => $item) {
            $roleAction = new RoleAction;
            $roleAction->controller = $item['controller'];
            $roleAction->action = $item['action'];
            $roleAction->type = $item['type'];
            $roleAction->role_id = $request->name;
            $roleAction->save();
        }

        return redirect()->route('resource.index')->with('success', 'The create successful');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roleAction = RoleAction::find($id);
        $roleNameList = Role::pluck('name', 'id');
        $dataRoleAction = array(
            'role_action' => $roleAction->controller . ':' . $roleAction->action . ':' . $roleAction->type,
            'role_action_id' => $roleAction->id,
        );

        return view('resources.resource_edit')->with('roleAction',
            $dataRoleAction)->with(compact('roleNameList'))->with('roleId', $roleAction->role_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'role_action' => [
                'required',
                'max:255',
                'regex:/^([A-Za-z]+\:[A-Za-z]+\:[0-3]+)((\|)([A-Za-z]+\:[A-Za-z]+\:[0-3]+))*$/'
            ]
        ]);
        //Update dtb_roles_action table
        DB::table('dtb_roles_action')->where('id', $id)->delete();
        $arrRoleAction = explode('|', $request->role_action);
        $arrItem = array();
        $i = 0;
        foreach ($arrRoleAction as $key => $value) {
            $arrRoleData = explode(':', $value);
            $arrItem[$i]['controller'] = $arrRoleData[0];
            $arrItem[$i]['action'] = $arrRoleData[1];
            $arrItem[$i]['type'] = $arrRoleData[2];
            $i++;
        }
        foreach ($arrItem as $key => $item) {
            $roleAction = new RoleAction;
            $roleAction->controller = $item['controller'];
            $roleAction->action = $item['action'];
            $roleAction->type = $item['type'];
            $roleAction->role_id = $request->name;
            $roleAction->save();
        }

        return redirect()->route('resource.index')->with('success', 'The update successful');
    }

    /**0
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('dtb_roles_action')->where('id', $id)->delete();
        return redirect()->route('resource.index')->with('success', 'The delete successful');
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $resources = DB::table('dtb_roles')->join('dtb_roles_action', 'dtb_roles.id', '=',
                'dtb_roles_action.role_id')->where('dtb_roles.name', 'LIKE',
                '%' . $name . '%')->orWhere('dtb_roles_action.controller', 'LIKE',
                '%' . $name . '%')->orWhere('dtb_roles_action.action', 'LIKE',
                '%' . $name . '%')->orderBy('dtb_roles_action.id', 'DESC')->select('dtb_roles.*', 'dtb_roles_action.id',
                'dtb_roles_action.controller', 'dtb_roles_action.action', 'dtb_roles_action.type',
                'dtb_roles_action.role_id')->paginate(5);

        return view('resources.resource_index', compact('resources'));
    }
}
