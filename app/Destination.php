<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //public $timestamps = false;
    protected $fillable= ['product_id','destination','target_person', 'quantity'];


    //When defining many-to-many relationships, you use belongsToMany() and not hasMany. hasMany is used for one-to-many relationships.
    public function products() 
    {
        //return  $this->belongsTo('App\Product', 'product_id');
        //Remember, Eloquent will automatically determine the proper foreign key column on the Comment model. By convention, Eloquent will take the "snake case" name of the owning model and suffix it with _id. So, for this example, Eloquent will assume the foreign key on the Comment model is post_id.

        return  $this->belongsToMany('App\Product');//->withPivot('destination_product')->withTimestamps();
    }
}
