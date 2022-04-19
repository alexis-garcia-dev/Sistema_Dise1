<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $name
 * @property $slug
 * @property $descriptions
 * @property $extract
 * @property $price
 * @property $image
 * @property $visible
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'name' => 'required',
		'slug' => 'required',
		'descriptions' => 'required',
		'extract' => 'required',
		'price' => 'required',
		'image' => 'required',
		'visible' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug','descriptions','extract','price','image','visible','categoria_id'];



}
