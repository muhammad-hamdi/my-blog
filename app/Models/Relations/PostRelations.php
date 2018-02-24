<?php

namespace App\Models\Relations;

use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;

trait PostRelations
{
    /**
     * Post belongs to one user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Post has many comments.
     *
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Post has many likes.
     *
     * @return mixed
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Post belongs to many categories.
     *
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
