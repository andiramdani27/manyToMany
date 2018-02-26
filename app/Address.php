<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
    
{
    //public $timestamps = false;
    protected $fillable = ['customer_id','zip', 'city', 'street_name', 'street_number' ];
    
    public function customer()   
    {
        return $this->belongsTo('App\Customer');//->withDefault();

    }
}
/*

If you would like to make all attributes mass assignable, you may define the $guarded property as an empty array:

 * The attributes that aren't mass assignable.
 *
 * @var array
protected $guarded = [];

*/
