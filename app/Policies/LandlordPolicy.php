<?php

namespace App\Policies;

use App\Models\Landlord;
use App\Models\User;

class LandlordPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //

        if ($user->is_admin) {
            return true;
        }

        return false;    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Landlord $landlord): bool
    {
        //
        if ($user->is_admin) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Landlord $landlord): bool
    {
        //
        if ($user->is_admin) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Landlord $landlord): bool
    {
        //
        if ($user->is_admin) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Landlord $landlord): bool
    {
        //
        if ($user->is_admin) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Landlord $landlord): bool
    {
        //
        if ($user->is_admin) {
            return true;
        }

        return false;
    }
}
