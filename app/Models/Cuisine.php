<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    protected $table = 'cuisines';

    protected $fillable = [
        'name',
        'display_name',
    ];
}
