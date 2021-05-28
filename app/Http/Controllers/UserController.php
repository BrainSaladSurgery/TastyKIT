<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Users');
    }

    public function getUsers()
    {
        return $user = User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::where('id', $id)->first();
        $address = $usuario->address;

        $user = [   'name' => $usuario->name,
                    'firstName' => $usuario->firstName,
                    'lastName' => $usuario->lastName,
                    'rol' => $usuario->rol_id,
                    'email' => $usuario->email,
                    'phone' => $usuario->phone,
                    'address' => $address->address,
                    'id' => $usuario->id
        ];
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->rol_id = $request->rol;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->name = $request->name;
        $address = Address::find($user->addresses_id);
        $address->address = $request->address;

        $address->update();
        $user->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return response(null, Response::HTTP_OK);
    }
}
