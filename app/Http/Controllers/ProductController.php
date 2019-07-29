<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacture;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
            'pageTitle' => 'Product',
            'createUrl' => 'products/create',
            'modalSize' => 'modal-lg',
            'modalTitle' => 'Create New Product',
        ];
        $products = Product::all();
        return view('admin.setup.products.index', compact('products','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Category::all();
        $manufactures = Manufacture::all();
        //$this->pr($products);
        return view('admin.setup.products.create', compact('products','manufactures'));
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
            $fileWithExt = $request->file('photo')->getClientOriginalName();
            $filename    = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $extension   = $request->file('photo')->getClientOriginalExtension();
            $fileToStore = $filename . '_' . time() . '.' . $extension;
            $destination = base_path() . '/public/uploads/products';
            $request->file('photo')->move($destination, $fileToStore);
        }else{
            $fileToStore = '';
        }

        $product = new Product();
        $product->product_name  = $request->input('product_name');
        $product->product_photo = $fileToStore;
        $product->category_id   = $request->input('category_id');
        $product->manufactures_id = $request->input('manufactures_id');
        $product->product_price = $request->input('product_price');
        $product->product_size  = $request->input('product_size');
        $product->product_color = $request->input('product_color');
        $product->active_fg     = $request->input('active_fg');
        $product->product_desc  = $request->input('product_desc');
        $product->product_name  = $request->input('product_name');
        $product->created_by    = auth()->user()->id;
        $product->save();

        return redirect('products')->with('success','Product has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
        //
    }
}
