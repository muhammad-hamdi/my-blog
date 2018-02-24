<?php

namespace App\Models\Roles;

trait UserRoles
{
    /**
     * Determine whether the user is admin or not.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role == self::ADMIN_USER;
    }

    /**
     * Determine whether the user is author or not.
     *
     * @return bool
     */
    public function isAuthor()
    {
        return $this->role == self::AUTHOR_USER;
    }

    /**
     * Determine whether the user is normal user or not.
     *
     * @return bool
     */
    public function isNormalUser()
    {
        return $this->role == self::NORMAL_USER;
    }
}
