<?php

namespace App\Traits;

trait HasRoles
{
    /**
     * Check if the user has the specified role.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        // Assuming roles are stored as an array in the user's `roles` column
        return in_array($role, $this->roles);
    }
}
