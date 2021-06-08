<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Inertia\Inertia;
use \Illuminate\Http\Response;

class InvoicesController extends Controller
{
    public function __construct(Order $order){

        $this->order = $order;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Invoices');
    }

    public function getInvoices()
    {
        $invoices = Order::all();


        $datos = [];
            foreach($invoices as $item){

                if($item->drink_id == ''){
                    array_push($datos, [
                                        "type_item" => 'plato',
                                        "id"=>$item->id,
                                        "ticket"=>$item->ticket,
                                        "total"=>$item->total,
                                        //'item' =>$item->dishes->name,
                                        //"tableName"=>$item->table->name,
                                        //"userName"=>$item->user->name,
                                        'ud' =>$item->ud
                    ]);
                }

                if($item->dish_id == ''){
                    array_push($datos, [
                                        "type_item" => 'bebida',
                                        "id"=>$item->id,
                                        "ticket"=>$item->ticket,
                                        "total"=>$item->total,
                                        //'item' =>$item->drinks->name,
                                        //"tableName"=>$item->table->name,
                                        //"userName"=>$item->user->name,
                                        'ud' =>$item->ud
                    ]);
                    print_r($item->drinks);
                }


            }
        return $datos ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Dish  $dish
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function updateDish(Request $request, $id)
    {
        $dish = Dish::findOrfail($id);
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->categories_id = $request->cat_id;

        $dish->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}