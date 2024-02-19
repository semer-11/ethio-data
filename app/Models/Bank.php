<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts=['social_links'=>'array'];
    protected $hidden=['created_at','updated_at'];
}
