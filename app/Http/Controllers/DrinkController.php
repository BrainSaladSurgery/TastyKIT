<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\DrinkCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;


/**
 * @author Yelx <jessica.rod.mir@gmail.com>
 * Controller Model Drink
 */
class DrinkController extends Controller
{

    /**
     * Constructor DrinkController
     * @param Drink $drink
     */
    public function __construct(Drink $drink){

        $this->drink = $drink;
    }

    /**
     * Display a view of the resource.
     *
     * @return Inertia\Inertia Admin/Drinks[allCategories,type]
     */
    public function index()
    {
        $allCategories = DrinkCategory::all();
        $drink = Drink::all()->first();
        return Inertia::render('Admin/Drinks', ['allCategories' => $allCategories,
                                                'type' => $drink->type] );
    }


    /**
     * Return all drinks in BD
     *
     * @return App\Models\Drink $datos
     */
    public function getDrinks()
    {
        $drinks = Drink::all();
        $datos = [];
            foreach($drinks as $drink){
                array_push($datos, [
                                        'id' => $drink->id,
                                        'price' => $drink->price,
                                        'amount' => $drink->amount,
                                        'image' => $drink->image,
                                        'description' =>$drink->description,
                                        'name' =>$drink->name,
                                        'type' => 'Bebida',
                                        'categories_id' => 4,
                                        'category' => $drink->category->name,
                                        'ud' =>$drink->ud
                                ]);
            }
        return $datos ;
    }

    /**
     * Create a new resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            DB::beginTransaction();

            $drink = $this->drink->createDrink($request);

            DB::commit();

            return $drink;

        }catch (\Exception $e){

            DB::rollBack();
            return response()->json($e->getMessage(),500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Drink::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function updateDrink(Request $request, $id)
    {
        $drink = Drink::findOrfail($id);
        $drink->name = $request->name;
        $drink->amount = $request->amount;
        $drink->description = $request->description;
        $drink->categories_id = $request->categories_id;

        $drink->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Drink::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}