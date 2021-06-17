<?php

namespace App\Models\Itinerary;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    //
    protected $fillable=['package_id','itinerary_title','day','itinerary_description'];

    public function packages(){
        return $this->belongsTo('App\Models\Package\Package','package_id');
    }
}
