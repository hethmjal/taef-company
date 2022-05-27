<?php

namespace App\Policies;

use App\Models\Services;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicesPolicy
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
        return $user->hasAbility('services.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Services $services)
    {
        return $user->hasAbility('services.view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAbility('services.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Services $services)
    {
        return $user->hasAbility('services.update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Services $services)
    {
        return $user->hasAbility('services.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Services $services)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Services $services)
    {
        //
    }
}