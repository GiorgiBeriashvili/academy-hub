<?php

namespace App\Policies;

use App\Models\User;
use App\Repositories\Constants;
use Illuminate\Auth\Access\HandlesAuthorization;
use JetBrains\PhpStorm\Pure;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function viewAny(User $user): bool
    {
        return in_array($user->role, Constants::roles);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param User $model
     * @return bool
     */
    #[Pure] public function view(User $user, User $model): bool
    {
        return $user->isAdmin() || ($user->isUser() && $user->id === $model->id);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function create(User $user): bool
    {
        return $user->isAdmin() || ($user === null);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param User $model
     * @return bool
     */
    #[Pure] public function update(User $user, User $model): bool
    {
        return $user->isAdmin() || ($user->isUser() && $user->id === $model->id);
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
}
