<?php

namespace App\Models;

use App\Models\Roles\UserRoles;
use App\Models\Scopes\UserScopes;
use App\Models\Helpers\UserHelpers;
use App\Models\Mutators\UserMutators;
use App\Models\Relations\UserRelations;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia
{
    use Notifiable, UserRelations, UserScopes, UserMutators, UserHelpers, UserRoles, HasMediaTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /** User Roles */
    const ADMIN_USER = 1;
    const AUTHOR_USER = 2;
    const NORMAL_USER = 3;
    /* End User Roles */
}
