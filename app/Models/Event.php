<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'event_title',
        'event_description',
        'event_schedule',
        'event_slug',
        'event_image',
        'event_status',
    ];

}
