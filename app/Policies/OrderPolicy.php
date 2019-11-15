<?php

namespace App\Policies;

use App\User;
use App\Order;


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

    public function isOwnerOfProduct(User $user, Order $order ):bool
    {
        return $user->id === $order->buyer_id;
    }

}
