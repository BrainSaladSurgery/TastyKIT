<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'image',
        'description',
        'name',
        'type',
        'default_img',
        'categories_id'
    ];

    // Method createProduct
    public static function createProduct($request)
    {
        $url = null;

        if($request->imageDefault == true){

            $url = 'https://cdn1.iconfinder.com/data/icons/fruit-filled-line-1/64/food_fruit_vegetable_vegetarian_organic_tomato-256.png';

        }else{

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $storage = Storage::disk('public')->put($name, $file);
            $url = asset('storage/' . $storage);

        }

        $product = (new static)::create([
            'image' => $url,
            'description' => $request->decription,
            'name' => $request->name,
            'amount' => $request->amount,
            'categories_id' => $request->categoryCreate,
            'default_img' => $request->imageDefault,
            'type' => 'Producto',
        ]);

        return $product;
    }


    public function products_dishes()
    {
        return $this->belongsToMany(Dish::class);//muchos a muchos
    }

    public function products_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }

    public function products_category()
    {
        return $this->belongsTo(ProductCategory::class);//muchos a 1
    }

    public function products_allergens()
    {
        return $this->belongsToMany(Allergen::class);//muchos a muchos
    }
}