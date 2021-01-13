<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use JetBrains\PhpStorm\Pure;

class MailPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @return bool
     */
    #[Pure] public function send(User $user): bool
    {
        return $user->isAdmin();
    }
}
