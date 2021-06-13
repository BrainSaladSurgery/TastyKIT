<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'image',
        'description',
        'name',
        'type',
        'default_img',
        'categories_id',
        'ud',
        'price'
    ];

    /**
     * Create a new resources
     *
     * @param mixed $request
     * @return App\Models\Drink $drink
     */
    public static function createDrink($request)
    {
        $url = null;

        if($request->imageDefault == 'true'){

            $url = 'https://cdn0.iconfinder.com/data/icons/vectr-examples/458/food-coke-256.png';
            $default_img = true;

        }else{

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $storage = Storage::disk('public')->put($name, $file);
            $url = asset('storage/' . $storage);
            $default_img = false;

        }

        $drink = (new static)::create([

            'description' => $request->decription,
            'image' => $url,
            'name' => $request->name,
            'amount' => $request->amount,
            'price' => floatval($request->price),
            'default_img' => $default_img,
            'categories_id' => $request->categoryCreate,
            'type' => 'Bebida',
            'ud' => 1,

        ]);

        return $drink;
    }

    /**
     * Return relationship drink with orders
     *
     * @return $drink
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'ticket_order', 'id', 'drink_id');//muchos a muchos
    }

    /**
     * Return relationship Drink with category
     *
     * @return $drink
     */
    public function category()
    {
        return $this->belongsTo(DrinkCategory::class, 'categories_id', 'id');//1 a muchos
    }

}