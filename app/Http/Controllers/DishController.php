<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\DishCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use \Illuminate\Http\Response;

class DishController extends Controller
{

    public function __construct(Dish $dish){

        $this->dish = $dish;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories = DishCategory::all();
        $dish = Dish::all()->first();
        return Inertia::render('Admin/Dishes', ['allCategories' => $allCategories,
                                                'type' => $dish->type] );
    }

    public function getDishes()
    {
        $dishes = Dish::all();

        $datos = [];
            foreach($dishes as $dish){
                array_push($datos, [
                                        "id"=>$dish->id,
                                        "name"=>$dish->name,
                                        "description"=>$dish->description,
                                        'price' => $dish->price,
                                        "type"=>$dish->type,
                                        "cat_id"=>$dish->categories_id,
                                        "category"=>$dish->category->name,
                                ]);
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

        Dish::create([
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
        $dish = Dish::find($id);
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
    public function update(Request $request, Dish $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dish::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}