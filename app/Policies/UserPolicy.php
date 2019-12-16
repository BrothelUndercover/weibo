<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUser,User $user)
    {
        //$currentUser 当前登录用户实例，$user 需要进行授权的用户实例
        return $currentUser->id === $user->id;
    }
}
