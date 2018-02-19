<?php

namespace App\Models;

use App\Models\Relations\LikeRelations;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use LikeRelations;
}
