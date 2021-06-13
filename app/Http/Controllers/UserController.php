<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

/**
 * @author Yelx <jessica.rod.mir@gmail.com>
 * Controller Model User
 */
class UserController extends Controller
{
    /**
     * Display a view of the resource.
     *
     * @return Inertia\Inertia Admin/Users
     */
    public function index()
    {
        return Inertia::render('Admin/Users');
    }

    /**
     * Return all dishes in BD object User
     *
     * @return App\Models\User $datos
     */
    public function getUsers()
    {
        $users = User::all();
        $datos = [];

        foreach($users as $usuario){

            $address = $usuario->address;
            $role = User::where('id', $usuario->id)->first()->roles()->first()->name;

            array_push($datos , [   'name' => $usuario->name,
                                    'firstName' => $usuario->firstName,
                                    'lastName' => $usuario->lastName,
                                    'dni' => $usuario->dni,
                                    'rol' => $role,
                                    'email' => $usuario->email,
                                    'phone' => $usuario->phone,
                                    'type' => $usuario->type,
                                    'address' => $address->address,
                                    'id' => $usuario->id
            ]);
        }

        return $datos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request $id
     * @return \Illuminate\Http\Response $user
     */
    public function show($id)
    {
        $usuario = User::where('id', $id)->first();
        $address = $usuario->address;
        $role = User::where('id', $id)->first()->roles()->first()->name;

        $user = [   'name' => $usuario->name,
                    'firstName' => $usuario->firstName,
                    'lastName' => $usuario->lastName,
                    'rol' => $role,
                    'email' => $usuario->email,
                    'phone' => $usuario->phone,
                    'type' => $usuario->type,
                    'address' => $address->address,
                    'id' => $usuario->id
        ];
        return $user;
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
        $rol = $request->rol == 'Admin' ? '1' : '2';

        $user = User::findOrfail($id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->name = $request->name;
        $user->roles()->sync($rol);
        $address = Address::find($rol);
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