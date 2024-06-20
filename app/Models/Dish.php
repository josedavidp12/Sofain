<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dish
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property OrderItem[] $orderItems
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dish extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'precio', 'category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany(\App\Models\OrderItem::class, 'id', 'dish_id');
    }
    
}
