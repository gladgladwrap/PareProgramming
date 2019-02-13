<?php

namespace App\Policies;

use App\User;
use App\ServiceRequest;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceRequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the service request.
     *
     * @param  \App\User  $user
     * @param  \App\ServiceRequest  $serviceRequest
     * @return mixed
     */
    public function view(User $user, ServiceRequest $serviceRequest)
    {
        return $user->id == $serviceRequest->user_id;
    }

    /**
     * Determine whether the user can create service requests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the service request.
     *
     * @param  \App\User  $user
     * @param  \App\ServiceRequest  $serviceRequest
     * @return mixed
     */
    public function update(User $user, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Determine whether the user can delete the service request.
     *
     * @param  \App\User  $user
     * @param  \App\ServiceRequest  $serviceRequest
     * @return mixed
     */
    public function delete(User $user, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Determine whether the user can restore the service request.
     *
     * @param  \App\User  $user
     * @param  \App\ServiceRequest  $serviceRequest
     * @return mixed
     */
    public function restore(User $user, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the service request.
     *
     * @param  \App\User  $user
     * @param  \App\ServiceRequest  $serviceRequest
     * @return mixed
     */
    public function forceDelete(User $user, ServiceRequest $serviceRequest)
    {
        //
    }
}
