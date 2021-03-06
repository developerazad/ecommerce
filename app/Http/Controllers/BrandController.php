<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
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
            'title'      => 'Setup',
            'pageTitle'  => 'Brand',
            'createUrl'  => 'brands/create',
            'modalSize'  => 'modal-md',
            'modalTitle' => 'Add New Brand',
        ];
        $brands = Brand::brands();
        return view('admin.layouts.setup.brands.index', compact('brands','header'));
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
            'brand_name' => $request->input('brand_name'),
            'brand_desc' => $request->input('brand_desc'),
            'active_fg'  => $request->input('active_fg'),
            'created_by' => auth()->user()->id
        );
        $insert = Brand::insert($data);
        if ($insert) {
            return redirect('brands')->with('success', 'Brand added successfully');
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
        $brand = Brand::brand($id);
        return view('admin.layouts.setup.brands.edit', compact('brand'));
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
            'brand_name' => $request->input('brand_name'),
            'brand_desc' => $request->input('brand_desc'),
            'active_fg'  => $request->input('active_fg'),
            'updated_by' => auth()->user()->id
        );
        $updateBrand = Brand::updateBrand($data, $id);
        if ($updateBrand) {
            return redirect('brands')->with('success', 'Brand updated successfully');
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
        $deleteBrand = Brand::deleteBrand($id);
        if ($deleteBrand){
            return redirect('brands')->with('success','Brand deleted successfully');
        }
    }

    // Brand wise search
    public function brandWiseSearch($id)
    {
        $categories = Category::categories();
        $brands     = Brand::brands();
        $products   = Product::brandWiseProducts($id);
        return view('public.layouts.search.brandWiseSearch', compact('categories','brands','products'));
    }
}
