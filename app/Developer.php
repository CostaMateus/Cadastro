<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name', 'role'
    ];

    function projects()
    {
        return $this->belongsToMany("App\Project", "allocations");
    }
}
