<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Inertia\Inertia;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function __construct(Reservation $reserv)
    {
        $this->reserv = $reserv;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $allCategories = ProductCategory::all();
        // $product= Product::all()->first();
        // return Inertia::render('Admin/Products',['allCategories' => $allCategories,
        //                                         'type' => $product->type]);
    }

    public function getReserv()
    {
        return $reserv = reserv::all();
    }

    public function show($id){

        return Reservation::where('id', $id)->first();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        Reservation::create([
            'firstName' => $request->name,
            'lastName' => $request->lastName,
            'day' => $request->day,
            'pax' => $request->pax,
            'hour' => $request->hour,
            'time' => $request->time
        ]);
    }

    /**
     * Update the specified product in Database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(Request $request,  $id)
    {
        $producto = Product::findOrfail($id);
        $producto->name = $request->name;
        $producto->amount = $request->amount;
        $producto->description = $request->description;
        $producto->categories_id = $request->categories_id;

        $producto->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}