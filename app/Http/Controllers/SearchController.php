<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Drink;
use App\Models\User;

class SearchController extends Controller
{
    public function search($name, $type){

        switch ($type) {
            case 'Producto':
                return Product::select('id','name','amount','description')->where('name','like','%'.$name.'%')->get();

                break;

            case 'Bebida':
                return Drink::select('id','name','amount','description')->where('name','like','%'.$name.'%')->get();

                break;

            case 'Usuario':
                return User::select('id','name','firstName','lastName')->where('name','like','%'.$name.'%')->get();

                break;
        }


    }
}
