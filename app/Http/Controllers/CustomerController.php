<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Order;
use Illuminate\Http\Request;
use App\Customer;
use App\PublicProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(){
        $categories = Category::categories();
        $brands = Brand::brands();
        return view('public.layouts.customers.login', compact('categories', 'brands'));
    }

    public function orderSubmit(Request $request){
        $customer = array(
            'customer_name'     => $request->input('customer_name'),
            'customer_email'    => $request->input('customer_email'),
            'customer_pwd'      => Hash::make($request->input('customer_pwd')),
            'customer_address'  => $request->input('customer_address'),
            'customer_district' => $request->input('customer_district'),
            'customer_phone'    => $request->input('customer_phone')
        );
        $customerId = Customer::insert($customer);
        $orderMst = array(
            'customer_id'     => $customerId,
            'order_place'     => $request->input('customer_address'),
            'contact_no'      => $request->input('customer_phone'),
            'order_date'      => date('Y-m-d'),
            'order_total'     => 50000,//Cart::total(),
            'shipping_method' => $request->input('shipping_method'),
            'payment_method'  => $request->input('payment_method'),
        );
        $orderMstId = Order::insertMst($orderMst);
        $carts = Cart::content();
        $orderChd = array();
        foreach ($carts as $cart){
            $orderChd[] = array(
                'ordermst_id'    => $orderMstId,
                'product_id'     => $cart->id,
                'product_qty'    => $cart->qty,
                'unit_price'     => $cart->price,
                'subtotal_price' => $cart->total,
            );
        }
        //$c = number_format(Cart::total(),2);

        //$this->pr($c);
        $order = Order::insertChd($orderChd);
        if($order){
            Cart::destroy();
            return 'Order submitted successfully';
        }

    }
}
