<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{

    protected $guarded = [];

    public function cancelled()
    {
        return ($this->deleted_at) ? "<span class='badge bg-danger-transparent text-danger'>Deleted</span>" : "<span class='badge bg-success-transparent text-success'>Active</span>";
    }

    public function religion($id)
    {
        $a = Caste::where('id', Caste::where('id', $id)->first()->parent)->first();
        return Caste::where('id', $a->parent)->first()->name;
    }

    public function caste()
    {
        return $this->belongsTo(Caste::class, 'parent', 'id');
    }
}
