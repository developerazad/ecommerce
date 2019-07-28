<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'modalTitle' => 'Create New Category',
        ];
        $categories = Category::all(); //$this->pr($categories);
        return view('admin.productManagement.categories.index',compact('categories','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productManagement.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->category_desc = $request->input('category_desc');
        $category->active_fg     = $request->input('active_fg');
        $category->created_by    = auth()->user()->id;
        $category->save();
        return redirect('categories')->with('success','Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $editData = Category::find($category->category_id);
        return view('admin.productManagement.categories.edit',compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $category = Category::find($category->category_id);
        $category->category_name = $request->input('category_name');
        $category->category_desc = $request->input('category_desc');
        $category->active_fg     = $request->input('active_fg');
        $category->updated_by    = auth()->user()->id;
        $category->save();
        return redirect('categories')->with('success','Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('success','Category has been deleted successfully');
    }


}
