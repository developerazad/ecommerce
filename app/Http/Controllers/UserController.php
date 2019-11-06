<?php

namespace App\Http\Controllers;

use App\User;
use App\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
            'pageTitle'  => 'User',
            'createUrl'  => 'users/create',
            'modalSize'  => 'modal-md',
            'modalTitle' => 'Add New User',
        ];
        $users = User::users();
        return view('admin.layouts.accessControl.users.index', compact('users','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = UserGroup::groups();
        return view('admin.layouts.accessControl.users.create', compact('groups'));
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
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            'password'      => Hash::make($request->input('password')),
            'user_group_id' => $request->input('user_group_id'),
            'active_fg'     => $request->input('active_fg'),
            'created_by'    => auth()->user()->id
        );
        $insert = User::insert($data);
        if ($insert) {
            return redirect('users')->with('success', 'User added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user   = User::user($id);
        $groups = UserGroup::groups();
        return view('admin.layouts.accessControl.users.edit', compact('user','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            //'password'      => Hash::make($request->input('password')),
            'user_group_id' => $request->input('user_group_id'),
            'active_fg'     => $request->input('active_fg'),
            'updated_by'    => auth()->user()->id
        );
        if(!empty($request->input('password'))){
            $data['password'] = Hash::make($request->input('password'));
        }
        $updateUser = User::updateUser($data, $id);
        if ($updateUser) {
            return redirect('users')->with('success', 'User updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::deleteUser($id);
        if ($deleteUser){
            return redirect('users')->with('success','User deleted successfully');
        }
    }
}
