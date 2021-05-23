<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search($name){

        return Product::select('id','name','amount','description')->where('name','like','%'.$name.'%')->get();

    }
}