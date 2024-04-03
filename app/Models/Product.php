<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
        'qty',
        'selling_price',
        'buying_price',
        'Product_type_id',
        'status',
    ];

    public function product_type(){
        return $this->belongsTo(ProductType::class, 'Product_type_id');
    }
}
