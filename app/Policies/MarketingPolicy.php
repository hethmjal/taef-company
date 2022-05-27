<?php

namespace App\Policies;

use App\Models\Marketing;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarketingPolicy
{
    use HandlesAuthorization;



    public function before(User $user , $ability) {
        if($user->type  == 'admin') return true;	       
    }

    
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasAbility('marketing.viewAny');

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Marketing $marketing)
    {
        return $user->hasAbility('marketing.view');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAbility('marketing.create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Marketing $marketing)
    {
        return $user->hasAbility('marketing.update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Marketing $marketing)
    {
        return $user->hasAbility('marketing.delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Marketing $marketing)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Marketing $marketing)
    {
        //
    }
}