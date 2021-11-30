<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        //
        $order = Order::all();
        return "Index : " .$order;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "Create";
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
        $order = new Order;
        $order->cart_id = $request->cart_id;
        $order->validation = 1;
        $order->progress = "Waiting";
        $order->sellerStatus = "Waiting";
        $order->shipperStatus = "Waiting";
        $order->save();
        return "Store : " .$order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        return "Show : " .$order;
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
        return "Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order = Order::find($order->id);
        if ($request->cart_id) {
            $order->cart_id = $request->cart_id;
        }
        if ($request->validation) {
            $order->validation = $request->validation;
        }
        if ($request->progress) {
            $order->progress = $request->progress;
        }
        if ($request->sellerStatus) {
            $order->sellerStatus = $request->sellerStatus;
            if ($request->sellerStatus == 'accept') {
                $order->progress = 'seller_accept';
            } else if ($request->sellerStatus == 'refuse') {
                $order->progress = 'seller_refuse';
            } else if ($request->sellerStatus == 'ready') {
                $order->progress = 'seller_ready';
            }
        }
        if ($request->shipperStatus) {
            $order->shipperStatus = $request->shipperStatus;
            if ($request->shipperStatus == 'accept') {
                $order->progress = 'shipping_in_progress';
            } else if ($request->shipperStatus == 'refuse') {
                $order->progress = 'waiting';
            } else if ($request->shipperStatus == 'shipped') {
                $order->progress = 'shipped';
            }
        }
        $order->save();
        return "Update : " .$order;
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
        $order = Order::find($order->id)->delete();
        return "Destroy : " .$order;
    }
}
