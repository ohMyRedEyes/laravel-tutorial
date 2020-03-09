<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // created with 'php artisan make:model Project'
    // available in code via 'use App\Project'
    // uses 'projects' table in a database

    protected $fillable = [ // let's declare which fields we will allow to pass into database to prevent malicious actions as passing an id
        'title', 'description'
    ];

    /*protected $guarded = [
        // filelds that we don't want to be mass assigned (opposite to fillable)
    ]*/
}
