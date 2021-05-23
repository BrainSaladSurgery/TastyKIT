<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'categories_id'
    ];

    public static function createDrink($request)
    {
        $url = null;

        if($request->imageDefault == true){

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
            'default_img' => $default_img,
            'categories_id' => $request->categoryCreate,
            'type' => 'Bebida',
        ]);

        return $drink;
    }

    public function drinks_orders()
    {
        return $this->belongsToMany(Order::class);//muchos a muchos
    }

    public function drinks_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }
}