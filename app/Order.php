<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     //public $timestamps = false;
     protected $fillable = ['customer_id', 'product_id', 'quantity'];

     public static $rules = array(
         'customer_id' => 'required',
         'product_id' => 'required',
     );
 
     public function products()
     {
         return  $this->belongsToMany('App\Products')->withTimestamps();
 
     }

     public function customer()
     {
         return  $this->belongsTo('App\Customer')->withTimestamps();
 
     }
 
}
