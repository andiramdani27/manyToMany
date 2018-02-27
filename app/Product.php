<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    //public $timestamps = false;
    //protected $fillable = ['productname', 'price'];
    protected $fillable = ['product_name', 'price', 'VAT', 'ordered_quantity'];

    // public static $rules = array(
    //     'name' => 'required',
    //     'price' => 'required',
    //     'VAT' => 'required',

    // );

    public function customers()
    {
        //return  $this->belongsToMany('App\Customer')->withPivot('customer_product')->withTimestamps();
        return  $this->belongsToMany('App\Customer')->withTimestamps();

    }

}
