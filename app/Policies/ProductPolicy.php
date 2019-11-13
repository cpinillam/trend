<?php

namespace App\Policies;

use App\User;
use App\Products;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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

    public function edit(User $user, Products $products):bool
    {
       return $user->id === $products->user_id;
    }

    //ToDo refactizar nombre de function

    public function isOwner(User $user, Products $products):bool
    {
       $result = ($user->id === $products->user_id);
       if(!$result)
       {
           return true;
       }
       return false;
    }

    public function isNotOwner(User $user, Products $products):bool
    {   
        $result = ($user->id !== $products->user_id);
        if(!$result)
        {
            return true;   
        }
        return false;
    }





}
