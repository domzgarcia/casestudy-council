<?php

namespace App\Policies;

use App\User;
use App\SamplePersion;
use Illuminate\Auth\Access\HandlesAuthorization;

class SamplePersionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the samplePersion.
     *
     * @param  \App\User  $user
     * @param  \App\SamplePersion  $samplePersion
     * @return mixed
     */
    public function view(User $user, SamplePersion $samplePersion)
    {
        //
    }

    /**
     * Determine whether the user can create samplePersions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        dd('Sample Persion create');
    }

    /**
     * Determine whether the user can update the samplePersion.
     *
     * @param  \App\User  $user
     * @param  \App\SamplePersion  $samplePersion
     * @return mixed
     */
    public function update(User $user, SamplePersion $samplePersion)
    {
        dd('Sample Persion update');
    }

    /**
     * Determine whether the user can delete the samplePersion.
     *
     * @param  \App\User  $user
     * @param  \App\SamplePersion  $samplePersion
     * @return mixed
     */
    public function delete(User $user, SamplePersion $samplePersion)
    {
        //
    }
}
