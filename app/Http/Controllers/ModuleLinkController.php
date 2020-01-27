<?php

namespace App\Http\Controllers;

use App\ModuleLink;
use App\Module;
use Illuminate\Http\Request;

class ModuleLinkController extends Controller
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
        $header =[
            'title'      => 'Access Control',
            'pageTitle'  => 'Module Links',
            'createUrl'  => 'module-links/create',
            'modalSize'  => 'modal-lg',
            'modalTitle' => 'Add New Module Link',
        ];
        $moduleLinks = ModuleLink::moduleLinks(); //$this->pr($moduleLinks);
        return view('admin.layouts.accessControl.moduleLinks.index', compact('moduleLinks','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::modules();
        return view('admin.layouts.accessControl.moduleLinks.create', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'module_link_name' => $request->input('module_link_name'),
            'module_id'        => $request->input('module_id'),
            'route_url'        => $request->input('route_url'),
            'controller_method'=> $request->input('controller_method'),
            'method_type'      => $request->input('method_type'),
            'module_link_type' => $request->input('module_link_type'),
            'userdsl_no'       => $request->input('userdsl_no'),
            'active_fg'        => $request->input('active_fg'),
            'created_by'       => auth()->user()->id
        );
        $insert = ModuleLink::insert($data);
        if ($insert) {
            return redirect('module-links')->with('success', 'Module Link added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModuleLink  $moduleLink
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModuleLink  $moduleLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moduleLink = ModuleLink::moduleLink($id);
        $modules = Module::modules();
        return view('admin.layouts.accessControl.moduleLinks.edit', compact('moduleLink','modules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModuleLink  $moduleLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'module_link_name' => $request->input('module_link_name'),
            'module_id'        => $request->input('module_id'),
            'route_url'        => $request->input('route_url'),
            'controller_method'=> $request->input('controller_method'),
            'method_type'      => $request->input('method_type'),
            'module_link_type' => $request->input('module_link_type'),
            'userdsl_no'       => $request->input('userdsl_no'),
            'active_fg'        => $request->input('active_fg'),
            'updated_by'       => auth()->user()->id
        );
        $updateModuleLink = ModuleLink::updateModuleLink($data, $id);
        if ($updateModuleLink) {
            return redirect('module-links')->with('success', 'Module Link updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModuleLink  $moduleLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteModuleLink = ModuleLink::deleteModuleLink($id);
        if ($deleteModuleLink){
            return redirect('modules')->with('success','Module Link deleted successfully');
        }
    }
}
