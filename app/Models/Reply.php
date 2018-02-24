<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\ReplyRelations;

class Reply extends Model
{
    use ReplyRelations;
    protected $fillable = [
        'content',
        'user_id',
    ];
}
