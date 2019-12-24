<?php

namespace App\Http\Controllers;

use App\Brand;
//use Cart;
use App\Category;
use App\Product;
use App\PublicProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::categories();
        $brands = Brand::brands();
        return view('public.layouts.customers.carts', compact('categories', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 1233;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productId   = $request->input('productId');
        $qty         = $request->input('qty');
        $productInfo = Product::product($productId);
        $data = Cart::add([
            'id'     => $productId,
            'name'   => $productInfo->product_name,
            'qty'    => $qty,
            'price'  => $productInfo->product_price,
            'options'=> array(
                'image' => $productInfo->product_photo,
                'code'  => $productInfo->product_code,
            )
        ]);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rowId = $id;
        $qty   = $request->input('qty');
        Cart::update($rowId, $qty);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('carts');
    }


    public function checkout(){
        $categories = Category::categories();
        $brands = Brand::brands();
        $email = Session::get('customer_email');
        if(!empty($email)){
            return view('public.layouts.customers.checkout', compact('categories', 'brands'));
        }else{
            return view('public.layouts.customers.checkoutWithSignUp', compact('categories', 'brands'));
        }
    }
}
