<?php

namespace App\Models\Relations;

use App\Models\Post;

trait CategoryRelations
{
    /**
     * Category belongs to many posts
     *
     * @return mixed
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}