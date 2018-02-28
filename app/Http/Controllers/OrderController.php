<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $orders =Order::all();
        return view('orders.index', compact('orders'));
        */
        $orders = Order::all();
        $products = Product::all();
        $customers = Customer::all();
       
        return view('orders.index', compact('orders','products', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('orders.create');
        $orders =Order::all();
        $products = Product::all();
        $customers = Customer::all();
        
        return view('orders.create', compact('orders', 'products', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer
        ::create($request->all())
        ->products()
        ->create($request->all());
        //Session::flash('message', 'Vásárló sikeresen felvive!');
        return redirect('orders')->with('status', 'Új product/vásárló felvive!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
