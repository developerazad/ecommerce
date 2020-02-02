<?php

namespace App\Http\Controllers;

use App\Module;
use App\ModuleLink;
use App\Permission;
use App\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $header = [
            'title'      => 'Access Control',
            'pageTitle'  => 'Module Assign'
        ];
        $modules = Module::modules();
        $moduleLinks = ModuleLink::moduleLinks();
        $userGroups = UserGroup::groups();
        return view('admin.layouts.accessControl.modulesAssign.index', compact('header', 'modules', 'moduleLinks', 'userGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModuleAssign  $roleAssign
     * @return \Illuminate\Http\Response
     */
    public function show(RoleAssign $roleAssign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModuleAssign  $roleAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleAssign $roleAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModuleAssign  $roleAssign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoleAssign $roleAssign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModuleAssign  $roleAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleAssign $roleAssign)
    {
        //
    }

    public function userGroupWisePage(Request $request){
        $userGroupId = $request->input('userGroupId');
        $modules     = Module::modules();
        $moduleLinks = Permission::moduleLinks();
        //$this->pr($moduleLinks);
        return view('admin.layouts.accessControl.modulesAssign.permission', compact('userGroupId', 'modules', 'moduleLinks'));

    }
    public function userGroupWisePermission(Request $request){
        $userGroupId    = $request->input('userGroupId');
        $moduleLinkId   = $request->input('moduleLinkId');
        $dataPermission = $request->input('dataPermission');
        $permissionFlag = $request->input('permissionFlag');
        //echo $userGroupId.'-'.$moduleLinkId.'-'.$dataPermission.'-'.$permissionFlag;

        $ifExist = Permission::checkModuleLink($userGroupId, $moduleLinkId);

        // update permission
        if($ifExist){
            $data = array(
              'module_link_id' => $moduleLinkId,
              'user_group_id'  => $userGroupId,
               $this->permissionType($dataPermission) => $permissionFlag
            );
            //$this->pr($data);
            DB::table('ac_permissions')->where('user_group_id', $userGroupId)->where('module_link_id', $moduleLinkId)->update($data);
        // assign new permission
        }else{
            $data = array(
                'user_group_id'  => $userGroupId,
                'module_link_id' => $moduleLinkId,
                'create_fg'      => $this->permissionType($dataPermission) == 'create_fg'? $permissionFlag:0,
                'read_fg'        => $this->permissionType($dataPermission) == 'read_fg'  ? $permissionFlag:0,
                'update_fg'      => $this->permissionType($dataPermission) == 'update_fg'? $permissionFlag:0,
                'delete_fg'      => $this->permissionType($dataPermission) == 'delete_fg'? $permissionFlag:0,
                'active_fg'      => $this->permissionType($dataPermission) == 'active_fg'? $permissionFlag:0,
            );
            //$this->pr($data);
            DB::table('ac_permissions')->insert($data);
        }
    }

    public function permissionType($dataPermission){
        if($dataPermission=='C'){
            return 'create_fg';
        }elseif($dataPermission=='R'){
            return 'read_fg';
        }elseif($dataPermission=='U'){
            return 'update_fg';
        }elseif($dataPermission=='D'){
            return 'delete_fg';
        }elseif($dataPermission=='AS'){
            return 'active_fg';
        }
    }

}
