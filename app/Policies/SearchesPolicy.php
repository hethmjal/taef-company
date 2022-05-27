<?php

namespace App\Policies;

use App\Models\Searches;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SearchesPolicy
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
        return $user->hasAbility('searches.viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Searches  $searches
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Searches $searches)
    {
        return $user->hasAbility('searches.view');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAbility('searches.create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Searches  $searches
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Searches $searches)
    {
        return $user->hasAbility('searches.update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Searches  $searches
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Searches $searches)
    {
        return $user->hasAbility('searches.delete');

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Searches  $searches
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Searches $searches)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Searches  $searches
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Searches $searches)
    {
        //
    }
}