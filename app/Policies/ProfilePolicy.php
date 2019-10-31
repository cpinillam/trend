<?php

namespace App\Policies;

use App\User;
use App\Profile;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
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
    
    public function showButtons(User $user, Profile $profile):bool
    {
        return $user->id === $profile->user_id;
    }
    
    public function edit(User $user, Profile $profile):bool
    {
        return $user->id === $profile->user_id;
    }
}
