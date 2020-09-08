<?php

namespace App\Policies;

use App\User;
use App\Vlog;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class VlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vlog  $vlog
     * @return mixed
     */
    public function view(User $user, Vlog $vlog)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id == 1
                ? Response::allow()
                : Response::deny('Not Access allowed. Contact the admin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vlog  $vlog
     * @return mixed
     */
    public function update(User $user, Vlog $vlog)
    {
        return $user->id == 1
                ?Response::allow()
                :Response::deny('Access restricted.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vlog  $vlog
     * @return mixed
     */
    public function delete(User $user, Vlog $vlog)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vlog  $vlog
     * @return mixed
     */
    public function restore(User $user, Vlog $vlog)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Vlog  $vlog
     * @return mixed
     */
    public function forceDelete(User $user, Vlog $vlog)
    {
        //
    }
}
