<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;
use \Illuminate\Http\Response;

/**
 * @author Yelx <jessica.rod.mir@gmail.com>
 * [Description OrderController]
 */
class OrderController extends Controller
{
    /**
     * Display a view of the resource.
     *
     * @return Inertia\Inertia Admin/Orders
     */
    public function index()
    {
        return Inertia::render('Admin/Orders');
    }

    /**
     * Display a last Number order
     *
     * @return int
     */
    public function getNumTicket(){

        $order = Order::orderBy('ticket','desc')->get()->first();
        return $order->ticket;
    }

    /**
     * Create a new resource.
     *
     * @param Illuminate\Http\Request $data
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
}