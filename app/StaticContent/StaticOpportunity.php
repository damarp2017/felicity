<?php

namespace App\StaticContent;

use Illuminate\Database\Eloquent\Model;

class StaticOpportunity extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'benefits',
        'reasons'
    ];

    protected $casts = [
        'benefits' => 'array',
        'reasons' => 'array',
    ];
}
