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
            'modalTitle' => 'Add New Product',
        ];
        $products = Product::products();
        return view('admin.layouts.setup.products.index', compact('products','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::categories();
        $manufactures = Manufacture::manufactures();
        return view('admin.layouts.setup.products.create', compact('categories','manufactures'));
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
            $destination = base_path() . '/public/uploads/products/';
            $request->file('photo')->move($destination, $fileToStore);
        }else{
            $fileToStore = '';
        }

        $data = array(
            'product_name'    => $request->input('product_name'),
            'product_photo'   => $fileToStore,
            'category_id'     => $request->input('category_id'),
            'manufactures_id' => $request->input('manufactures_id'),
            'product_price'   => $request->input('product_price'),
            'product_size'    => $request->input('product_size'),
            'product_color'   => $request->input('product_color'),
            'active_fg'       => $request->input('active_fg'),
            'product_desc'    => $request->input('product_desc'),
            'created_by'      => auth()->user()->id
        );
        $insert = Product::insert($data);
        if($insert){
            return redirect('products')->with('success','Product added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::categories();
        $manufactures = Manufacture::manufactures();
        $product = Product::product($id);
        return view('admin.layouts.setup.products.edit', compact('categories','manufactures','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
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
            $destination = base_path() . '/public/uploads/products/';
            $request->file('photo')->move($destination, $fileToStore);
        }
        $data = array(
            'product_name'    => $request->input('product_name'),
            'category_id'     => $request->input('category_id'),
            'manufactures_id' => $request->input('manufactures_id'),
            'product_price'   => $request->input('product_price'),
            'product_size'    => $request->input('product_size'),
            'product_color'   => $request->input('product_color'),
            'active_fg'       => $request->input('active_fg'),
            'product_desc'    => $request->input('product_desc'),
            'created_by'      => auth()->user()->id
        );
        if(!empty($request->file('photo'))){
            $data['product_photo'] = $fileToStore;
        }
        $updateProduct = Product::updateProduct($data, $id);
        if($updateProduct){
            return redirect('products')->with('success','Product updated successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteProduct = Product::deleteProduct($id);
        if ($deleteProduct) {
            return redirect('products')->with('success', 'Product deleted successfully');
        }
    }
}
