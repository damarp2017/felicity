<?php

namespace App\StaticContent;

use Illuminate\Database\Eloquent\Model;

class StaticAbout extends Model
{
    protected $fillable = [
        'title',
        'visions',
        'exellences',
    ];
}
