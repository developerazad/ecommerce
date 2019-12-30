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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::categories();
        $brands     = Brand::brands();
        $customerId = session('customer_id');
        $customer   = Customer::find($customerId);
        return view('public.layouts.customers.account', compact('categories', 'brands', 'customer'));
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
    public function userValidation(Request $request){
        $email     = $request->input('customer_email');
        $password  = $request->input('customer_pwd');
        $checkUser = DB::table('customers')->where('customer_email',$email)->first();
        if($checkUser){
            $checkPassword = Hash::check($password, $checkUser->customer_pwd);
            if($checkPassword){
                Session::put([
                    'customer_id'      => $checkUser->customer_id,
                    'customer_email'   => $checkUser->customer_email,
                    'customer_name'    => $checkUser->customer_name,
                    'customer_address' => $checkUser->customer_address,
                    'customer_phone'   => $checkUser->customer_phone
                ]);
                return redirect('checkout');
            }else{
                return redirect('customer-login')->with('error', 'Invalid username or password');
            }
        }else{
            return redirect('customer-login')->with('error', 'Invalid username or password');
        }
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
        // if user not exist add user else not
        if(!empty($request->input('customer_id'))){
            $customerId = $request->input('customer_id');
        }else {
            $customerId = Customer::insert($customer);
        }
        $totalAmount = Cart::total();
        $total = str_replace(',','', $totalAmount);
        $orderMst = array(
            'customer_id'       => $customerId,
            'order_place'       => $request->input('customer_address'),
            'contact_no'        => $request->input('customer_phone'),
            'order_date'        => date('Y-m-d'),
            'order_total'       => $total,
            'shipping_method'   => $request->input('shipping_method'),
            'payment_method'    => $request->input('payment_method'),
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
        $order = Order::insertChd($orderChd);
        if($order){
            Cart::destroy();
            Session::put([
                'customer_id'     => $customerId,
                'customer_email' => $request->input('customer_email'),
                'customer_name'  => $request->input('customer_name'),
                'customer_phone' => $request->input('customer_phone')
            ]);
            return redirect('/');

        }

    }

    // customer profile update
    public function updateProfile(Request $request){
        $categories = Category::categories();
        $brands = Brand::brands();
        $customerId = session('customer_id');
        $customer   = Customer::find($customerId);
        if($_POST){
            $data = array(
                'customer_name'     => $request->input('customer_name'),
                'customer_email'    => $request->input('customer_email'),
                'customer_address'  => $request->input('customer_address'),
                'customer_district' => $request->input('customer_district'),
                'customer_phone'    => $request->input('customer_phone')
            );
            $customer = Customer::find($customerId)->update($data);
            if($customer) {
                return redirect('account')->with('success', 'Profile updated successfully.');
            }
        }
        return view('public.layouts.customers.updateProfile', compact('categories', 'brands', 'customer'));
    }
}
