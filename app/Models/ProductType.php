<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductType extends Model
{
    use HasFactory;
    protected $fillable = ['name']; // กำหนดใหR name สามารถเพิ่มขRอมูลไดRผาน mass assignment
    public function products() // ความสัมพันธa One-to-Many กับ Product
    {
    return $this->hasMany(Product::class, 'product_type');
    }
}