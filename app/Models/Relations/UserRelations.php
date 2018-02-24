<?php

namespace App\Models\Relations;

use App\Models\Like;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Comment;

trait UserRelations
{
    /**
     * User has many posts.
     *
     * @return mixed
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * User has many comments.
     *
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * User has many likes.
     *
     * @return mixed
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * User has many replies.
     *
     * @return mixed
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
