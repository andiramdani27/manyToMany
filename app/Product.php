<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    //public $timestamps = false;
    //protected $fillable = ['productname', 'price'];
    protected $fillable = ['productname', 'price', 'VAT'];

    public static $rules = array(
        'name' => 'required',
        'price' => 'required',
        'VAT' => 'required',

    );

    public function destinations()
    {
        return  $this->belongsToMany('App\Destination');//->withPivot('destination_product')->withTimestamps();

    }

}
