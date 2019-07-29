<?php

namespace App\Http\Controllers;

use App\Fontend;
use Illuminate\Http\Request;
use App\Manufacture;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header =[
            'title'     => 'Setup',
            'pageTitle' => 'Brand',
            'createUrl' => 'manufactures/create',
            'modalSize' => 'modal-md',
            'modalTitle' => 'Create New Brand',
        ];
        $brands = Manufacture::all();
        //$this->pr($brands);
        return view('admin.setup.brands.index', compact('brands','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setup.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manufacture = new Manufacture();
        $manufacture->manufactures_name = $request->input('manufactures_name');
        $manufacture->manufactures_desc = $request->input('manufactures_desc');
        $manufacture->active_fg     = $request->input('active_fg');
        $manufacture->created_by    = auth()->user()->id;
        $manufacture->save();
        return redirect('manufactures')->with('success','Brand has been added successfully');
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
        //return $id;
        $editData = Manufacture::find($id);//$this->pr($editData);
        return view('admin.setup.brands.edit', compact('editData'));
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
        $manufacture = Manufacture::find($id);
        $manufacture->manufactures_name = $request->input('manufactures_name');
        $manufacture->manufactures_desc = $request->input('manufactures_desc');
        $manufacture->active_fg     = $request->input('active_fg');
        $manufacture->updated_by    = auth()->user()->id;
        $manufacture->save();
        return redirect('manufactures')->with('success','Brand has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacture = Manufacture::find($id);
        $manufacture->delete();
        return redirect('manufactures')->with('success','Brand has been deleted successfully');
    }

}
