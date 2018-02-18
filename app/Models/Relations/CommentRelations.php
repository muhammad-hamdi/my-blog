<?php

namespace App\Models\Relations;

use App\Models\Post;
use App\Models\User;

trait CommentRelations
{
    /**
     * Comment belongs to one user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Comment belongs to one post.
     *
     * @return mixed
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}