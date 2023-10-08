<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    private function can(String $needle, User $user): bool
    {
        return in_array($needle, $user->ability->pluck('title')->toArray()) ||
            in_array($needle,  $user->role->ability->pluck('title')->toArray());
    }


    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $this->can('view-any-role', $user);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $this->can('view-any-role', $user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $this->can('create-role', $user);
    }



    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $this->can('edit-any-role', $user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $this->can('delete-any-role', $user);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user ): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user): bool
    {
        //
    }
}
