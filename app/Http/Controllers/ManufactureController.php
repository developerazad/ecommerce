<?php

namespace App\Http\Controllers;
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
            'title'      => 'Setup',
            'pageTitle'  => 'Brand',
            'createUrl'  => 'manufactures/create',
            'modalSize'  => 'modal-md',
            'modalTitle' => 'Add New Brand',
        ];
        $manufactures = Manufacture::manufactures();
        return view('admin.layouts.setup.brands.index', compact('manufactures','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.setup.brands.create');
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
            'manufactures_name' => $request->input('manufactures_name'),
            'manufactures_desc' => $request->input('manufactures_desc'),
            'active_fg'         => $request->input('active_fg'),
            'created_by'        => auth()->user()->id
        );
        $insert = Manufacture::insert($data);
        if ($insert) {
            return redirect('manufactures')->with('success', 'Brand added successfully');
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
        $manufacture = Manufacture::manufacture($id);
        return view('admin.layouts.setup.brands.edit', compact('manufacture'));
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
            'manufactures_name' => $request->input('manufactures_name'),
            'manufactures_desc' => $request->input('manufactures_desc'),
            'active_fg'         => $request->input('active_fg'),
            'updated_by'        => auth()->user()->id
        );
        $updateManufacture = Manufacture::updateManufacture($data, $id);
        if ($updateManufacture) {
            return redirect('manufactures')->with('success', 'Brand updated successfully');
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
        $deleteManufacture = Manufacture::deleteManufacture($id);
        if ($deleteManufacture){
            return redirect('manufactures')->with('success','Brand deleted successfully');
        }
    }

}
