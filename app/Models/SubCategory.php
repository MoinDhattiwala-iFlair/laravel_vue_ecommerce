<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'name', 'status'];

    protected $appends = ['category_name'];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::slug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the category that owns the SubCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault();
    }

    /**
     * Get all of the products for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {    
        return $this->hasMany(Product::class, 'sub_category_id', 'id');
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }
}
