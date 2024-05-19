<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $table = 'member';
    public $fillable = [
        "name",
        "designation",
        "fb_url",
        "in_url",
        "image",
        "status",
    ];
}
