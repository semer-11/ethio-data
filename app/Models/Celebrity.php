<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $hidden=['created_at', 'updated_at'];
    protected $casts = ['social_links' => 'array'];
}
