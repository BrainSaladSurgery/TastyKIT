<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Inertia\Inertia;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

/**
 * @author Yelx <jessica.rod.mir@gmail.com>
 * [Description ReservationController]
 */
class ReservationController extends Controller
{
    /**
     * Constructor
     * @param App\Models\Reservation $reserv
     */
    public function __construct(Reservation $reserv)
    {
        $this->reserv = $reserv;
    }

    /**
     * Return all records in BD Reservation
     *
     * @return App\Models\Reservation $reserv
     */
    public function getReserv()
    {
        return $reserv = Reservation::all();
    }


    /**
     * Return count all totally Reservation
     *
     * @return int
     */
    public function getTotal()
    {
        return count(Reservation::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response $reservation
     */
    public function show($id){

        return Reservation::where('id', $id)->first();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param\Illuminate\Http\Request $request
     */
    public function create(Request $request)
    {
        Reservation::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'description' => $request->description,
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
    public function updateReserv(Request $request,  $id)
    {
        $reserv = Reservation::findOrfail($id);
        $reserv->firstName = $request->firstName;
        $reserv->pax = $request->pax;
        if($request->table_id != null){
            $reserv->table_id = $request->table_id;
        }
        //$reserv->comment = $request->description;
        $reserv->day = $request->day;
        $reserv->time = $request->time;
        $reserv->hour = $request->hour;

        $reserv->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}