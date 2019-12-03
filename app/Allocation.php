<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $fillable = [
        'developer_id', 'project_id', 'week_hours'
    ];
}
