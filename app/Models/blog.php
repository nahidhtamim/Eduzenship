<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'blog_title',
        'blog_description',
        'blog_slug',
        'blog_image',
        'blog_status',
    ];

}
