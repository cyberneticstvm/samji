<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = ['dob' => 'datetime'];

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

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function cancelled()
    {
        return ($this->deleted_at) ? "<span class='badge bg-danger-transparent text-danger'>Deleted</span>" : "<span class='badge bg-success-transparent text-success'>Active</span>";
    }
}
