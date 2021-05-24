<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected  $guarded = ['id','created_at', 'updated_at'];

    //relacion uno a mucho
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //relacion uno a mucho iversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
