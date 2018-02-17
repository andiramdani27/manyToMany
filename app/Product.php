<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products'; //do i need this?
    //public $timestamps = false;
    protected $fillable = ['name'];

    public static $rules = array(
        'name' => 'required',
        
    );

    public function destinations()
    {
        return  $this -> belongsToMany('App\Destination')->withPivot('destination_product')->withTimestamps();

    }

}
