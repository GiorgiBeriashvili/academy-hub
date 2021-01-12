<?php

namespace App\Policies;

use App\Models\Academy;
use App\Models\User;
use App\Repositories\Constants;
use Illuminate\Auth\Access\HandlesAuthorization;
use JetBrains\PhpStorm\Pure;

class AcademyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User|null $user
     * @return bool
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User|null $user
     * @return bool
     */
    public function view(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function create(User $user): bool
    {
        return in_array($user->role, Constants::roles);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Academy $academy
     * @return bool
     */
    #[Pure] public function update(User $user, Academy $academy): bool
    {
        return $user->isAdmin() || ($user->isUser() && $user->id === $academy->user_id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function delete(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function restore(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function forceDelete(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Academy $academy
     * @return bool
     */
    #[Pure] public function verify(User $user, Academy $academy): bool
    {
        return $user->isAdmin();
    }
}
