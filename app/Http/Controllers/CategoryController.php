<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            'pageTitle' => 'Category',
            'createUrl' => 'categories/create',
            'modalSize' => 'modal-md',
            'modalTitle'=> 'Create New Category',
        ];
        $categories = Category::categories();
        return view('admin.layouts.setup.categories.index',compact('categories','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.setup.categories.create');
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
            'category_name' => $request->input('category_name'),
            'category_desc' => $request->input('category_desc'),
            'active_fg'     => $request->input('active_fg'),
            'created_by'    => auth()->user()->id
        );
        $insert = Category::insert($data);
        if($insert) {
            return redirect('categories')->with('success', 'Category added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::category($id);
        return view('admin.layouts.setup.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = array(
            'category_name' => $request->input('category_name'),
            'category_desc' => $request->input('category_desc'),
            'active_fg' => $request->input('active_fg'),
            'updated_by' => auth()->user()->id
        );
        $updateCategory = Category::updateCategory($data, $id);
        if ($updateCategory) {
            return redirect('categories')->with('success', 'Category updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = Category::deleteCategory($id);
        if ($deleteCategory) {
            return redirect('categories')->with('success', 'Category deleted successfully');
        }
    }



}
