<?php

namespace App\Http\Controllers;

use App\Module;
use App\ModuleAssign;
use App\ModuleLink;
use App\Permission;
use App\UserGroup;
use Illuminate\Http\Request;

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
}
