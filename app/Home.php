<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{

    protected $fillable = [
        'title',
        'subtitle',
        'vision',
        'vision_description',
        'manifesto',
        'manifesto_image',
        'manifesto_description',
        'button_1',
        'button_2',
        'missions',
    ];

    protected $casts = [
        'button_1' => 'array',
        'button_2' => 'array',
        'missions' => 'array',
    ];
}
