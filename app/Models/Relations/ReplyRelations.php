<?php

namespace App\Models\Relations;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

trait ReplyRelations
{
    /**
     * Reply belongs to one user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Reply belongs to one comment.
     *
     * @return mixed
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
