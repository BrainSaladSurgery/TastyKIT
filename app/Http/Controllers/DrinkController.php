<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\DrinkCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;


class DrinkController extends Controller
{

    public function __construct(Drink $drink){

        $this->drink = $drink;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories = DrinkCategory::all();
        $drink = Drink::all()->first();
        return Inertia::render('Admin/Drinks', ['allCategories' => $allCategories,
                                                'type' => $drink->type] );
    }

    public function getDrinks()
    {
        return $drinks = Drink::all();
    }

    /**
     * Show the form for creating a new resource.
     *
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