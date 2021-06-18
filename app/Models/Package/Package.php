<?php

namespace App\Models\Package;

use App\Models\Category\Category;
use App\Models\Itinerary\Itinerary;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Package extends Model
{
    //

    use Sluggable;

    protected $path ='uploads/package';

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = ['id', 'title', 'slug', 'category_id', 'subcategory_id', 'description', 'rank',
    'trip_duration', 'max_altitude','is_featured', 'departure', 'departure_time','price',
    'min_group_size', 'max_group_size', 'cost_excludes', 'image1', 'image2', 'image',
    'banner_image','cost_includes', 'location_map'];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
    ];

    protected $appends = [
        'thumbnail_path', 'image_path', 'banner_path',  'image_path1', 'image_path2'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFeatured($query, $type = true)
    {
        return $query->where('is_featured', $type);
    }

    function getImagePathAttribute()
    {
        return $this->path . '/' . $this->image;
    }

    function getBannerPathAttribute()
    {
        if ($this->banner_image) {
            return $this->path . '/' . $this->banner_image;
        } else {
            return 'assets/images/reliance/Background.jpg';
        }
    }

    function getImagePath1Attribute(){
        return $this->path.'/'. $this->image1;
    }

    function getImagePath2Attribute(){
        return $this->path.'/'. $this->image2;
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image1;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function itinerary(){
        return $this->belongsTo(Itinerary::class);
    }


}
