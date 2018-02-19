<?php

namespace App\Models;

use App\Models\Relations\ReplyRelations;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use ReplyRelations;
    protected $fillable = [
        'content',
        'user_id'
    ];
}
