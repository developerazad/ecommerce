<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
            'title'      => 'UI Setup',
            'pageTitle'  => 'Slider',
            'createUrl'  => 'sliders/create',
            'modalSize'  => 'modal-md',
            'modalTitle' => 'Add New Slider',
        ];
        $sliders = Slider::sliders();
        return view('admin.layouts.uiSetup.slider.index', compact('sliders','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.uiSetup.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->file('photo'))) {
            // file with extension
            $fileWithExt = $request->file('photo')->getClientOriginalName();
            // just file name
            $filename    = pathinfo($fileWithExt, PATHINFO_FILENAME);
            // just extension
            $extension   = $request->file('photo')->getClientOriginalExtension();
            // file to store
            $fileToStore = $filename . '_' . time() . '.' . $extension;
            // move to directory
            $destination = base_path() . '/public/uploads/sliders/';
            $request->file('photo')->move($destination, $fileToStore);
        }else{
            $fileToStore = '';
        }

        $data = array(
            'heading_one'  => $request->input('heading_one'),
            'heading_desc' => $request->input('heading_desc'),
            'slider_photo' => $fileToStore,
            'active_fg'    => $request->input('active_fg')
        );
        $insert = Slider::insert($data);
        if ($insert) {
            return redirect('sliders')->with('success', 'Slider added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::slider($id);
        return view('admin.layouts.uiSetup.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($request->file('photo'))) {
            // file with extension
            $fileWithExt = $request->file('photo')->getClientOriginalName();
            // just file name
            $filename    = pathinfo($fileWithExt, PATHINFO_FILENAME);
            // just extension
            $extension   = $request->file('photo')->getClientOriginalExtension();
            // file to store
            $fileToStore = $filename . '_' . time() . '.' . $extension;
            // move to directory
            $destination = base_path() . '/public/uploads/sliders/';
            $request->file('photo')->move($destination, $fileToStore);
        }else{
            $fileToStore = $request->input('photo');
        }

        $data = array(
            'heading_one'  => $request->input('heading_one'),
            'heading_desc' => $request->input('heading_desc'),
            'slider_photo' => $fileToStore,
            'active_fg'    => $request->input('active_fg')
        );
        $updateSlider = Slider::updateSlider($id, $data);
        if ($updateSlider) {
            return redirect('sliders')->with('success', 'Slider updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSlider = Slider::deleteSlider($id);
        if ($deleteSlider) {
            return redirect('products')->with('success', 'Slider deleted successfully');
        }
    }
}
