<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\CommentRelations;

class Comment extends Model
{
    use CommentRelations;
}
