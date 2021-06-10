<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Inertia\Inertia;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    public function __construct(Order $order){

        $this->order = $order;
    }

    public function index()
    {
        return Inertia::render('Admin/Invoices');
    }

    public function getTotal()
    {
        return Order::distinct()->get('ticket');
    }

    public function getInvoices()
    {
        $invoices = Order::distinct()->get('ticket');
        $datos = [];
        foreach($invoices as $invoice){

            array_push($datos,$this->findOrderByTicket($invoice->ticket));
        }
        $order = InvoicesController::setArray($datos);
        return $order;
    }

    public function findOrderByTicket($ticket){

        $order = Order::where('ticket',$ticket)->get();

        $invoice = [];
        $tik = $order[0]->ticket;
        $mesa = DB::table('orders')->join('tables','orders.table_id','=','tables.id')->where('tables.id', $order[0]->table_id)->first();
        $status = $order[0]->status;
        $tim = $order[0]->created_at;
        $items = [];
        //$mesa = $order[0]->table_id;

        $total = $order[0]->total;
        $userName = $order[0]->owner($order[0]->user_id)->name;

        foreach($order as $orde){

            if($orde->drink_id != ''){
                array_push($items,[ 'name' => $orde->drink($orde->drink_id)->name,
                                    'price' => $orde->drink($orde->drink_id)->price,
                                    'ud' =>$orde->ud,
                                    'type' => 'Bebida'
                ]);
            }

            if($orde->dish_id != ''){
                array_push($items,  ['name' => $orde->dish($orde->dish_id)->name,
                                    'price' => $orde->dish($orde->dish_id)->price,
                                    'ud' =>$orde->ud,
                                    'type' => 'Plato'
                ]);
            }

        }

        array_push($invoice, ["ticket" => $tik]);
        array_push($invoice,["table" => $mesa]);
        array_push($invoice,["items" => $items]);
        array_push($invoice,["total" => $total]);
        array_push($invoice,["status" => $status]);
        array_push($invoice,["user" =>$userName]);
        array_push($invoice,["created_at" =>$tim]);

        return $invoice;

    }

    public static function  setArray($datos){
        $orders=[];

        for($i = 0; count($datos) > $i; $i++){

            array_push($orders, [

                "ticket" => $datos[$i][0]['ticket'],
                "table" => $datos[$i][1]['table'],
                "items" => $datos[$i][2]['items'],
                "total" => $datos[$i][3]['total'],
                "status" => $datos[$i][4]['status'],
                "user" => $datos[$i][5]['user'],
                "created_at" => $datos[$i][6]['created_at'],

            ]);

        }
        return $orders;
    }

    public function store(Request $request)
    {

        Order::create([
                'price' => $request->price,
                'description' =>$request->description,
                'name' =>$request->name,
                'type' => 'Plato',
                'categories_id' => $request->cat_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dish = Order::find($id);
        $datos = [
                    "id"=>$dish->id,
                    "name"=>$dish->name,
                    "description"=>$dish->description,
                    'price' => $dish->price,
                    "type"=>$dish->type,
                    "cat_id"=>$dish->categories_id,
                    "category"=>$dish->category->name,
        ];

        return $datos ;

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function updateTicket(Request $request, $ticket)
    {
        $orders = Order::where('ticket',$ticket)->get();

        foreach ($orders as $order) {

            $order->status = 'close';

            $order->update();
        }

        return response(null, Response::HTTP_OK);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}