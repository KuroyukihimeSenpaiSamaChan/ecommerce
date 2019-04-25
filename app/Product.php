<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sku',
        'ean',
        'name',
        'image_url',
        'url',
        'short_description',
        'description',
        'price',
        'tax_percent'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'float',
        'tax_percent' => 'float'
    ];

    public function getProductUrlAttribute(): string
    {
        return action('ProductController@view', [$this->id, $this->url]);
    }
}
