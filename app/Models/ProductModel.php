<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{

       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'producten';

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
    protected $fillable = [
        'categorie_id', 'naam', 'prijs', 'beschrijving', 'foto'
    ];
}
