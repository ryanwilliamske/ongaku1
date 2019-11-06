<?php

namespace App\Http\Controllers;
use SmoDav\Mpesa\Laravel\Facades\STK;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if(session('cart')){
            $cart = session('cart');
            if(Auth::guest()){
                return redirect('login');
            }else{
                $total = 0;
                foreach ($cart as $key => $value) {
                    $order = new Order;
                    $order->id = Auth::id();
                    $order->productId = $key;
                    $order->save();
                    $total = $cart[$key]['price'] * $cart[$key]['quantity'] * 100;
                }
                $response = STK::push($total ,254719601932,
                    "Online Buying Goods",
                    "Test Payment");

                    $msg = $response->ResponseDescription;
                    Session::forget('cart');
                    return view('products.thankyou')->with('Success',$msg);

            }
        }else{
            return redirect()->back()->with('error','Please load something onto the cart');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function stkpush(){
//        $response = STK::push(600,254703241750,"Online Buying Goods","Test");
//
//    }
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
    public function plusOne(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                $cart[$request->id]['quantity'] = $cart[$request->id]['quantity'] + 1 ;
                session()->put('cart',$cart);
            }
        }
        session()->flash('success','Added item');
        return view('checkout');
    }
    public function minusOne(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                $qt = $cart[$request->id]['quantity'];
                $cart[$request->id]['quantity'] = $qt - 1;
                session()->put('cart',$cart);
            }
        }
        session()->flash('success','One item removed');
        return view('checkout');
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
}
