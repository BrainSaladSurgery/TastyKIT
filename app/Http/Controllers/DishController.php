<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\DishCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use \Illuminate\Http\Response;

/**
 * @author Yelx <jessica.rod.mir@gmail.com>
 * Controller Model Dishes
 */
class DishController extends Controller
{

    /**
     * Constructor
     * @param Dish $dish
     */
    public function __construct(Dish $dish){

        $this->dish = $dish;
    }

    /**
     * Display a view of the resource.
     *
     * @return Inertia\Inertia Admin/Dishes[allCategories,type]
     */
    public function index()
    {
        $allCategories = DishCategory::all();
        $dish = Dish::all()->first();
        return Inertia::render('Admin/Dishes', ['allCategories' => $allCategories,
                                                'type' => $dish->type] );
    }

    /**
     * Return all dishes in BD
     *
     * @return App\Models\Dish $datos
     */
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
                                        'ud' =>$dish->ud
                                ]);
            }
        return $datos ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * @param  \Illuminate\Http\Request $id
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Request  $id
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
     * @param  \Illuminate\Http\Request  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dish::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}