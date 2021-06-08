<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;
use \Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Orders');
    }

    public function getNumTicket(){

        $order = Order::all();
        return $order->last();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {

        $mesa = $data->table;
        $total = $data->total;
        $ticket = $data->ticket;
        $user = $data->user_id;

        for($i= 0; count($data->items[0]) > $i; $i++){

            if($data->items[0][$i]['type'] == 'Bebida'){


                Order::create([
                    'ticket' => $ticket,
                    'status' => 'open',
                    'drink_id' => $data->items[0][$i]['id'],
                    'ud' => $data->items[0][$i]['ud'],
                    'table_id' => $mesa,
                    'total' => $total,
                    'user_id' => $user
                ]);

            }
            if($data->items[0][$i]['type'] == 'Plato'){

                Order::create([
                    'ticket' => $ticket,
                    'status' => 'open',
                    'dish_id' => $data->items[0][$i]['id'],
                    'ud' => $data->items[0][$i]['ud'],
                    'table_id' => $mesa,
                    'total' => $total,
                    'user_id' => $user
                ]);
            }
        }
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}