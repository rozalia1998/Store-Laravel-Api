<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'price',
        'img_url',
        'in_stock',
        'category_id',
        'subcat_id'
    ];

    public function category(){

        return $this->BelongsTo(Category::class);

    }

    public function subcat(){

        return $this->BelongsTo(SubCategory::class);

    }
}