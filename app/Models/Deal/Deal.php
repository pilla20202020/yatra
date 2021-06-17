<?php

namespace App\Models\Deal;

use App\Models\Package\Package;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //
    protected $fillable=['package_id','offer_price','is_featured'];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
