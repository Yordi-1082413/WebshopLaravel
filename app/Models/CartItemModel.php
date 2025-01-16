<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CartItemModel extends Model
{
 
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cartitems';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cart_id', 'product_id', 'product_quantity', 'product_price'
    ];
}
