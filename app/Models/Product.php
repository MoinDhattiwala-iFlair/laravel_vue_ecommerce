<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['sub_category_id', 'name', 'photo', 'description', 'status'];

    protected $appends = ['sub_category_name','category_id', 'category_name'];

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
     * Get the sub category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }

    /**
     * Get all of the category for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function category(): HasOneThrough
    {
        return $this->hasOneThrough(Category::class, SubCategory::class, 'id', 'id', 'sub_category_id', 'category_id');
    }

    public function getCategoryIdAttribute()
    {
        return $this->category->id;
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }

    public function getSubCategoryNameAttribute()
    {
        return $this->subcategory->name;
    }

    public function getPhotoAttribute()
    {
        return asset($this->photo ?? 'images/products/noimage.png');
    }
    
}
