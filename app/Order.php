<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     //public $timestamps = false;
     protected $fillable = ['customer_id', 'product_id', 'ordered_quantity'];

     public static $rules = array(
         'customer_id' => 'required',
         'product_id' => 'required',
     );

   
    // https://stackoverflow.com/questions/32954424/laravel-migration-array-type
    // protected $casts = [
    //     'product_id' => 'array'
    // ];

 
     public function products()
     {
         return  $this->belongsToMany('App\Products')->withTimestamps();
 
     }

     public function customer()
     {
         return  $this->belongsTo('App\Customer')->withTimestamps();
 
     }

    
 
}
