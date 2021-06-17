<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    //

    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



    protected $fillable = [
        'slug',
        'title',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
