<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(AdImage::class, 'ad_id', 'id');
    }

    public function mainCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function typeDetail()
    {
        return $this->belongsTo(Extra::class, 'type', 'id');
    }

    public function categoryDetail()
    {
        return $this->belongsTo(Extra::class, 'category', 'id');
    }
}
