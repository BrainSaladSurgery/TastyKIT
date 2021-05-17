<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function create(Request $request){
        try{
            DB::beginTransaction();

            $product = $this->product->createProduct($request);

            DB::commit();

            return $product;

        }catch (\Exception $e){

            DB::rollBack();
            return response()->json($e->getMessage(),500);
        }
    }

    public function getAll(){

    }

    public function getById($id){

    }

    public function update($id){

    }

    public function delete($id){

    }
}