<?php

namespace App\Models;

// use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class CategorieModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorieen';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['naam','foto'];
    
}
