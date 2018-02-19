<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\PostRelations;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Post extends Model implements HasMedia
{
    use PostRelations, HasMediaTrait;

    protected $fillable = [
        'title',
        'content'
    ];
}
