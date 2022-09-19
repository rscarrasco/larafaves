<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'link',
        'name',
        'description',
        'tags',
        'is_public',
    ];
}
