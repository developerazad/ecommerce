<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header =[
            'title'      => 'Access Control',
            'pageTitle'  => 'Module',
            'createUrl'  => 'modules/create',
            'modalSize'  => 'modal-md',
            'modalTitle' => 'Add New Module',
        ];
        $modules = Module::modules();
        return view('admin.layouts.accessControl.modules.index', compact('modules','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.accessControl.modules.create');
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
            'module_name' => $request->input('module_name'),
            'userdsl_no'  => $request->input('userdsl_no'),
            'module_icon' => $request->input('module_icon'),
            'active_fg'   => $request->input('active_fg'),
            'created_by'  => auth()->user()->id
        );
        $insert = Module::insert($data);
        if ($insert) {
            return redirect('modules')->with('success', 'Module added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::module($id);
        return view('admin.layouts.accessControl.modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'module_name' => $request->input('module_name'),
            'userdsl_no'  => $request->input('userdsl_no'),
            'module_icon' => $request->input('module_icon'),
            'active_fg'   => $request->input('active_fg'),
            'updated_by'  => auth()->user()->id
        );
        $updateModule = Module::updateModule($data, $id);
        if ($updateModule) {
            return redirect('modules')->with('success', 'Module updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteModule = Module::deleteModule($id);
        if ($deleteModule){
            return redirect('modules')->with('success','Module deleted successfully');
        }
    }
}
