<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\Post;
use App\Models\statuses;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(orders $orders, Post $post)
    {
        return view('orders.order', compact('post'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'FIO' => 'required',
            'post_title' => 'required',
            'image' => 'required',
            'order_quantity' => 'required',
            'order_status' => 'required',
            'comment' => 'required',
            'order_price' => 'required',

        ]);

        orders::create([
            'FIO' => $request->FIO,
            'post_title' => $request->post_title,
            'image' => $request->image,
            'order_quantity' => $request->order_quantity,
            'order_status' => $request->order_status,
            'comment' => $request->comment,
            'order_price' => $request->order_price,

        ]);

        return redirect()->route('orders.order_show');
    }

    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        $orders = orders::all();
        return view('orders.order_show', compact('orders'));
    }
    public function show_id(orders $order, statuses $statuses)
    {
        $statuses = statuses::all();
        return view('orders.order_show_id', compact('order', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function edit(Request $request, orders $order)
     {
        return view('orders.edit', compact('order'));
     }
     public function update(Request $request, orders $order)
    {

        $request->validate([
            'order_status' => 'required',
        ]);

        $order->update([
            'order_status' => $request->order_status
        ]);

        return redirect()->route('orders.order_show');
    }
    public function update_full(Request $request, orders $order)
    {

        $request->validate([
            'FIO' => 'required',
            'order_quantity' => 'required',
            'order_status' => 'required',
            'comment' => 'required',
            'order_price' => 'required',
        ]);

        $order->update([
            'FIO' => $request->FIO,
            'order_quantity' => $request->order_quantity,
            'order_status' => $request->order_status,
            'comment' => $request->comment,
            'order_price' => $request->order_price,
        ]);

        return redirect()->route('orders.order_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $order)
    {
        $order->delete();

        return redirect()->route('orders.order_show');
    }
}