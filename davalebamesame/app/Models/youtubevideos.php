<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class youtubevideos extends Model
{
    use HasFactory;

    protected $table = 'youtubevideos';

    protected $fillable = [
        
        "title",
        "chanel",
        "url",
        "description"

    ];

}