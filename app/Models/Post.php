<?php

namespace App\Models;

use App\Models\Relations\PostRelations;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Post extends Model implements HasMedia
{
    use PostRelations, HasMediaTrait;

    protected $fillable = [
        'title',
        'content',
    ];
}
