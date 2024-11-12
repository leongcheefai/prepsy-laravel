<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCuisine extends Model
{
    protected $table = 'user_cuisines';

    protected $fillable = [
        'user_id',
        'cuisine_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cuisine()
    {
        return $this->belongsTo(Cuisine::class);
    }
}
