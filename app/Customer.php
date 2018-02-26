<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //public $timestamps = false;
    protected $fillable= ['first_name','last_name','email', 'phone_number', 'zip', 'city', 'street_name', 'street_number'];

   


    //When defining many-to-many relationships, you use belongsToMany() and not hasMany. hasMany is used for one-to-many relationships.
    public function products() 
    {
       
        //Remember, Eloquent will automatically determine the proper foreign key column on the Comment model. By convention, Eloquent will take the "snake case" name of the owning model and suffix it with _id. So, for this example, Eloquent will assume the foreign key on the Comment model is post_id.

        return  $this->belongsToMany('App\Product')->withPivot('customer_product')->withTimestamps();
    }

   


}
