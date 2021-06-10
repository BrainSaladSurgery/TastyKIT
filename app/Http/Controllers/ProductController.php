<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;

class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories = ProductCategory::all();
        $product= Product::all()->first();
        return Inertia::render('Admin/Products',['allCategories' => $allCategories,
                                                'type' => $product->type]);
    }

    public function getProducts()
    {
        return $products = Product::orderBy('created_at','desc')->get();
    }

    public function show($id){

        return Product::where('id', $id)->first();
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

            $product = $this->product->createProduct($request);

            DB::commit();

            return $product;

        }catch (\Exception $e){

            DB::rollBack();
            return response()->json($e->getMessage(),500);
        }
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