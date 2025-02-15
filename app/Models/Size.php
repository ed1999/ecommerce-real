<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    //Relacion Uno a Muchos Inversa
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Relacion Muchos A Muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    
}
