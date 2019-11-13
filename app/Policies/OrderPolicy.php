<?php

namespace App\Policies;

use App\User;
use App\Order;
use App\Products;


use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
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

    public function checkout(User $user, Products $products):bool
    {
        if($user->id === $products->user_id)
        {
           return true;
        }
        return false;
    }

}
