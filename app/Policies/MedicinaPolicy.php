<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Medicina;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicinaPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Medicina');
    }

    public function view(AuthUser $authUser, Medicina $medicina): bool
    {
        return $authUser->can('View:Medicina');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Medicina');
    }

    public function update(AuthUser $authUser, Medicina $medicina): bool
    {
        return $authUser->can('Update:Medicina');
    }

    public function delete(AuthUser $authUser, Medicina $medicina): bool
    {
        return $authUser->can('Delete:Medicina');
    }

    public function restore(AuthUser $authUser, Medicina $medicina): bool
    {
        return $authUser->can('Restore:Medicina');
    }

    public function forceDelete(AuthUser $authUser, Medicina $medicina): bool
    {
        return $authUser->can('ForceDelete:Medicina');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Medicina');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Medicina');
    }

    public function replicate(AuthUser $authUser, Medicina $medicina): bool
    {
        return $authUser->can('Replicate:Medicina');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Medicina');
    }

}