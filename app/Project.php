<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'eta_hours'
    ];

    function developers()
    {
        return $this->belongsToMany("App\Developer", "allocations");
    }

}
