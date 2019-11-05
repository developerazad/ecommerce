<?php

namespace App\Http\Controllers;

use App\UserGroup;
use Illuminate\Http\Request;

class UserGroupController extends Controller
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
            'pageTitle'  => 'User Groups',
            'createUrl'  => 'user-groups/create',
            'modalSize'  => 'modal-md',
            'modalTitle' => 'Add New User Group',
        ];
        $groups = UserGroup::groups();
        return view('admin.layouts.accessControl.userGroups.index', compact('groups','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.accessControl.userGroups.create');
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
            'user_group_name'=> $request->input('user_group_name'),
            'user_group_key' => $request->input('user_group_key'),
            'userdsl_no'     => $request->input('userdsl_no'),
            'active_fg'      => $request->input('active_fg'),
            'created_by'     => auth()->user()->id
        );
        $insert = UserGroup::insert($data);
        if ($insert) {
            return redirect('user-groups')->with('success', 'Group added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = UserGroup::group($id);
        return view('admin.layouts.accessControl.userGroups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'user_group_name'=> $request->input('user_group_name'),
            'user_group_key' => $request->input('user_group_key'),
            'userdsl_no'     => $request->input('userdsl_no'),
            'active_fg'      => $request->input('active_fg'),
            'updated_by'     => auth()->user()->id
        );
        $updateGroup = UserGroup::updateGroup($data, $id);
        if ($updateGroup) {
            return redirect('user-groups')->with('success', 'Group updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteGroup = UserGroup::deleteGroup($id);
        if ($deleteGroup){
            return redirect('user-groups')->with('success','Group deleted successfully');
        }
    }
}
